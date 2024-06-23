<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $reviews = Review::all();
        $pagetitle = "Home";

        return view('home', compact('reviews', 'pagetitle'));
    }

    public function about () {
        $pagetitle = "About Us";
        return view('about', compact('pagetitle'));
    }

    public function why () {
        $pagetitle = "Why Choose Us";
        return view('why', compact('pagetitle'));
    }

    public function contact () {
        $pagetitle = "Contact Us";
        return view('contact', compact('pagetitle'));
    }

    public function interestForm() {
        $pagetitle = "Show Your Interest";
        $courses = Course::all();
        return view('interest-form', compact('courses', 'pagetitle'));
    }

    public function reviewForm() {
        $pagetitle = "Give Us A Review";
        $courses = Course::all();
        return view('review', compact('courses', 'pagetitle'));
    }

    public function course ($slug) {
        $course = Course::where('slug', $slug)->firstOrFail();
        $pagetitle = ucwords($course->title);
        return view('course', compact('course', 'pagetitle'));
    }
}
