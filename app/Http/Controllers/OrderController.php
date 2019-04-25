<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Order $order)
    {
        $order = $order->load('tour');
        
        return view('orders.index', compact('order'));
    }
}
