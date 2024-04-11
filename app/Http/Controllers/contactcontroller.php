<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contact = contact::all(); // Retrieve all menu data from the database
        return view('viewContact', compact('contact'));
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
        //
        //
        $contact = new contact();
        $contact->name =  $request->input( 'name' );
        $contact->email = $request->input( 'email' );
        $contact->message = $request->input( 'message' );
        $contact->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('layouts.contact');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //

        $contactId = $request->input('delete');

        // Retrieve the contact
        $contact = Contact::findOrFail($contactId);
        var_dump($contact);
        // Delete the contact
        $contact->delete();
    
        // Redirect back to a suitable page
        return redirect('/dashboard');
      
    }
}
