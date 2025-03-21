<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contact_us,email',
            'phone' => 'required|numeric|digits_between:10,15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Store data in the database
        ContactUs::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Redirect or return a response
        return response()->json([
            'success' => true,
            'message' => 'Thank you for contacting us! We will get back to you soon.'
        ]);
    }
}
