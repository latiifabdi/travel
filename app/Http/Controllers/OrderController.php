<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(Order $order)
    {
        $order = $order->load('tour');


        $order = $order->load('customer');
        
        return view('orders.index', compact('order'));
    }

    public function destory(Order $order)
    {
        $order->delete();

        return redirect('/tours')->with('orders', 'Your order has been deleted');
    }
}
