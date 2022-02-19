<?php

use Illuminate\Support\Facades\Route;

//Homepage Route
Route::get('/', 'App\Http\Controllers\PagesController@homepage')->name('homepage');
//Homepage Route

//About Us Route
Route::get('/about-us', 'App\Http\Controllers\PagesController@about')->name('about');
//About Us Route


//Contact Route
Route::get('/contact-us', 'App\Http\Controllers\PagesController@contact')->name('contact');
//Contact Route