<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//auth route 
Route::group(['middleware' => ['auth','verified']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
///////////////////////////////////////// ADMIN ROUTES ////////////////////////////////////////////



require __DIR__.'/auth.php';
