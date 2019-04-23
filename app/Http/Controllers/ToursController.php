<?php

namespace App\Http\Controllers;

use App\Tours;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function show(Tours $tour)
    {
        return view('tours.show', compact('tour'));
    }
}
