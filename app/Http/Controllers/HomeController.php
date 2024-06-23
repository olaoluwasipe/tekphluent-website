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

    public function interestForm() {
        $courses = Course::all();
        return view('interest-form', compact('courses'));
    }

    public function reviewForm() {
        $courses = Course::all();
        return view('review', compact('courses'));
    }

    public function course ($slug) {
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('course', compact('course'));
    }
}
