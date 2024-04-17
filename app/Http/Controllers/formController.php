<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Handle the incoming form submission.
     */
    public function __invoke(Request $request)
    {
        // // Validate form data
        // $data = $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'message' => 'required|string',
        // ]);

        // Process form data here (e.g., save to database)

        // Assuming you want to return a JSON response
        return view('form');
        // return response()->json(['message' => 'Form submitted successfully!']);
    }
}
