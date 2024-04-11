<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller {
    public function index() {




       // $FirstName = DB::table('Persons')->select(['FirstName'])->whereNotNull('FirstName')->orderBy('FirstName')->get();



        //$FirstName = DB::select('select * from Persons');

        //$FirstName = Test::all();

        
        //return view('welcome', ['name' => $FirstName]);




    }
}


?>