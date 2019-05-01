<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Tours;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use Redis;

class CheckoutController extends Controller
{
    public function index(Tours $tour)
    {
        return view('checkout.index', compact('tour'));
    }

    public function store()
    {
        $tour = Tours::findOrFail(request('tour'));

        \DB::table('tours')->where('id', $tour->id)->increment('visits');


        // charge the user
        Stripe::setApiKey(config('services.stripe.secret'));


        $charge = Charge::create([
            'amount' => $tour->amount,
            'currency' => 'usd',
            'description' => $tour->title,
            'source' => request('token'),
        ]);

        // create customer
        $customer = Customer::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('stripeEmail'),
            'address' => request('address'),
            'city' => request('city'),
            'phoneNumber' => request('phoneNumber'),
            'zipcode' => request('zipcode')
        ]);

        // create an order for that user.
        $order = Order::create([
            'email' => request('stripeEmail'),
            'amount' => number_format($charge->amount / 100, 2),
            'customer_id' => $customer->id,
            'tour_id' => $tour->id
        ]);

        return $order;
    }
}
