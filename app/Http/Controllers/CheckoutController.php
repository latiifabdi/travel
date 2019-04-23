<?php

namespace App\Http\Controllers;

use App\Order;
use App\Tours;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function index(Tours $tour)
    {
        return view('checkout.index', compact('tour'));
    }

    public function store()
    {
        $tour = Tours::findOrFail(request('tour'));

        // charge the user
        Stripe::setApiKey(config('services.stripe.secret'));

        $charge = Charge::create([
            'amount' => $tour->amount,
            'currency' => 'usd',
            'description' => $tour->title,
            'source' => request('token'),
        ]);


        // create an order for that user.
        Order::create([
            'email' => request('stripeEmail'),
            'amount' => number_format($charge->amount / 100, 2)
        ]);

        return 'done';

        // redirect to success page
    }
}
