<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\contactcontroller as ControllersContactcontroller;
use App\Http\Controllers\InlogController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\menucontroller as menucontroller2;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', [WelcomeController::class, 'index']);
Route::get('/', function () {
    return view('home', ['name' => 'Laravel' ]);
});
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

Route::get('/viewContact', [ControllersContactcontroller::class, 'index'])->name('contact.index');
Route::get('/updateMenu', [menucontroller2::class, 'index'])->name('updateMenu.index');
Route::post('/contact', 'App\Http\Controllers\contactcontroller@store')->name('item.store');
Route::post('/viewContact', 'App\Http\Controllers\contactcontroller@destroy')->name('contact.destroy');
//Route::post('/updateMenu', 'App\Http\Controllers\menucontroller@destroy')->name('menu.destroy');
Route::post('/updateMenu', 'App\Http\Controllers\menucontroller@update')->name('menu.update');
Route::delete('/deleteMenu/{id}', 'App\Http\Controllers\menucontroller@destroy')->name('menu.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/inlog', function () {
    return view('inlog');
});

Route::post('/toevoegen', 'App\Http\Controllers\menucontroller@store')->name('item.store');

Route::post('/inlog', 'App\Http\Controllers\InlogController@login')->name('login');
Route::get('/toevoegen', function () {
    return view('toevoegen');
});