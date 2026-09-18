<?php

namespace App\Http\Controllers;

use App\Models\Review;

class HomeController extends Controller
{
    /**
     * Render the homepage with dynamic database-backed testimonials.
     */
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('home', compact('reviews'));
    }
}
