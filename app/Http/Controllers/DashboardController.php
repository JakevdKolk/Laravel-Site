<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    // Method to show the contact page
    public function show()
    {
        if (Session::has('loggedIn') && Session::get('loggedIn')) {
            return view('dashboard');
        }
        else{
            return redirect('/');   
        }
    }

    

    
}
