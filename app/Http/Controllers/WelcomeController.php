<?php

namespace App\Http\Controllers;

use App\Tours;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $tours = Tours::all();

        $newTours = Tours::latest()->take(6)->get();

        return view('welcome.index', compact('tours', 'newTours'));
    }
}
