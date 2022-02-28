<?php

use Illuminate\Support\Facades\Route;


// This is main Home page Route Url Start

Route::get('/',function(){
    return view('pages.homepage.index');
});


// //auth route 
// Route::group(['middleware' => ['auth','verified']], function() { 
//     Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
// });


Route::prefix('')->group(function(){    
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth','verified');
});
Route::get('login-with-github', 'App\Http\Controllers\SocialPagesController@loginWithGithub')->name('loginWithGithub');
Route::get('callback-url', 'App\Http\Controllers\SocialPagesController@GithubCallBack')->name('GithubCallBack');

require __DIR__.'/auth.php';
