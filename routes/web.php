<?php

use Illuminate\Support\Facades\Route;

// ruta vista que se carga por defecto
//Route::view('/', 'auth.login')->name('login');
Route::view('/', 'home')->name('home');

// control routes
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

//Route::view('/home', 'home')->name('home');


Route::view('products', 'livewire.products.index');

Route::view('sales', 'livewire.sales.index');





	
