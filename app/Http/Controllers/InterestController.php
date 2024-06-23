<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Http\Requests\StoreInterestRequest;
use App\Http\Requests\UpdateInterestRequest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullName' => ['required', 'max:255'],
            'email' => ['required'],
            'phoneNumber' => ['required'],
            'country' => ['required'],
            'agerange' => ['required'],
            'course_id' => ['required'],
            'courseDate' => ['required']
        ]);

        $course = Interest::create($validatedData);

        if($course) {
            $message = [
                'success' => 'Thank you for showing interest, we would get back to you soon.'
            ];
        }else {
            $message = [
                'errors' => 'Please try again.'
            ];
        }
        return response()->json($message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Interest $interest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interest $interest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInterestRequest $request, Interest $interest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interest $interest)
    {
        //
    }
}
