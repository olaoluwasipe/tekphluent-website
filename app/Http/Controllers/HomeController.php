<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $reviews = Review::all();

        return view('home', compact('reviews'));
    }
}
