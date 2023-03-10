<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view(
        'home',
        [
            'name' => 'Raka',
            'role' => 'admin',
            'colors' => ['merah', 'kuning', 'hijau']
        ]
    );
});


Route::view('/about', 'about');
Route::view('/home', 'home');
Route::view('/contact', 'contact');
