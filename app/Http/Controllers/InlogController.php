<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\User;
use App\Http\Controllers\Controller;

class InlogController extends Controller
{
    //


    public function login(Request $request)
    {



        $users = User::all();
        if ($request->has('inlog')) {
            $username = $request->input('username');
            $password = $request->input('password');
            foreach ($users as $user) {
                $userName = $user->name;
                $userpas = $user->email;

                if ($username == $userName && $password == $userpas) {
                    return redirect('/dashboard');
                }
            }

            echo "<script>alert('Onjuiste gegevens'); window.location='/inlog';</script>";
        }
    }
}
