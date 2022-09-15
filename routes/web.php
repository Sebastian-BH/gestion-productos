<?php

use Illuminate\Support\Facades\Route;

// ruta vista que se carga por defecto
Route::view('/', 'auth.login')->name('login');

// control routes
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::view('/home', 'home')->name('home');

Route::view('companies', 'livewire.companies.index')->middleware('auth');

Route::view('sales', 'livewire.sales.index')->middleware('auth');

Route::view('users', 'livewire.users.index')->middleware('auth');

Route::view('boxes', 'livewire.boxs.index')->middleware('auth');




	
	
//Route Hooks - Do not delete//