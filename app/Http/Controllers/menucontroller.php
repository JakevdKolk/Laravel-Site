<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu; 

class menucontroller extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = menu::all(); // Retrieve all menu data from the database
        return view('updateMenu', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return(view('toevoegen'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $menu = new menu;
        $menu->name =  $request->input( 'name' );
        $menu->price = $request->input( 'price' );
        // $menu->foto = $request->input( 'afbeelding' );
        $menu->save();

        return redirect('/dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('layouts.menu');


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
    
     public function update(Request $request)
     {
         $menuItemId = $request->input('update');
 
         // Retrieve the menu item by its ID
         $menuItem = menu::find($menuItemId);
 
         // Update the attributes with the values from the form
         $menuItem->name = $request->input('name');
         $menuItem->price = $request->input('price');
 
         // Save the updated menu item
         $menuItem->save();
 
         // Redirect back or to a specific route
         return redirect()->back()->with('success', 'Menu item updated successfully!');
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $menuID = $request->input('delete');

        // Retrieve the menu
        $menu = Menu::findOrFail($menuID);

        // Delete the menu
        $menu->delete();
    
        // Redirect back to a suitable page
        return redirect('/dashboard');
    }
}
