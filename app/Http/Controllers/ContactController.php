<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
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
            'message' => ['required'],
            'email' => ['required'],
            'phoneNumber' => ['required']
        ]);

        $course = Contact::create($validatedData);

        $data = [
            'name' => $request->input('fullName'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'message' => $request->input('message'),
        ];

        Mail::to('contact@tekphluent.co.uk')->send(new ContactMail($data));

        if($course) {
            $message = [
                'success' => 'Thank you for your message, we would reach out soon.'
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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
