<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $reviews = Review::all();

        return view('home', compact('reviews'));
    }

    public function about () {
        return view('about');
    }

    public function why () {
        return view('why');
    }

    public function contact () {
        return view('contact');
    }

    public function course ($slug) {
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('course', compact('course'));
    }
}
