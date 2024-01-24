<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function handleFormSubmit(ContactUsRequest $request)
    {
        // Validation passed, proceed to store data

        // Create a new ContactUs instance
        $contactUs = new ContactUs([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Save the contact form data
        $contactUs->save();

        // Return a JSON response
        return response()->json(['message' => 'Form submitted successfully']);
    }
}
