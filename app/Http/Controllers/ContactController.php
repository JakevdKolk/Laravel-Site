<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Method to show the contact page
    public function show()
    {
        return view('layouts.contact');
    }

    

    
}
