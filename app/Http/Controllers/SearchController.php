<?php

namespace App\Http\Controllers;

use App\Tours;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $searchTerm = request('tours');
        
        $tours = Tours::query()
               ->where('title', 'LIKE', "%{$searchTerm}%")
               ->orWhere('description', 'LIKE', "%{$searchTerm}%")
               ->get();

        return view('tours.index', compact('tours'));
    }
}
