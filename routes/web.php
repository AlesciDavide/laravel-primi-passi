<?php

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

Route::get('/Home', function () {
    $header = ['Home', 'Products', 'Help', 'About'];
    

    return view('home', compact("header" ));
});

Route::get('/Products', function () {
    
    return view('Products');
});

Route::get('/Help', function () {
    
    return view('Help');
});

Route::get('/About', function () {
    
    return view('About');
});
