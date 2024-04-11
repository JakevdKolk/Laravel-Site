<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu; // Assuming your model is named Menu


class MenuController extends Controller
{
    // Method to show the contact page
    public function show()
    {
        return view('layouts.menu');
    }

    public function index()
        {
            $menus = Menu::all(); // Retrieve all menu data from the database
            return view('layouts.menu', compact('menus'));

        }
}
