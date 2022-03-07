<?php

use Illuminate\Support\Facades\Route;


// This is main Home page Route Url Start

Route::get('/',function(){
    return view('pages.homepage.index');
});




// //auth route 
// Route::group(['middleware' => ['auth','verified','role:user']], function() { 
//     Route::get('/Userdashboard', 'App\Http\Controllers\DashboardController@userDashboard')->name('userDashboard');
// });


Route::prefix('')->group(function(){    
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth','verified');

    // These are TermsConditions routes
    Route::get('/Terms_Conditions', 'App\Http\Controllers\termsConditionsController@showPage')->name('termsConditions');
    Route::get('/Terms_Conditions/create', 'App\Http\Controllers\termsConditionsController@create')->name('termsConditions.create');
    Route::put('/Terms_Conditions/create', 'App\Http\Controllers\termsConditionsController@store')->name('termsConditions.store');
    Route::get('/Terms_Conditions/list', 'App\Http\Controllers\termsConditionsController@list')->name('termsConditions.list');
    Route::get('/Terms_Conditions/edit/{id}', 'App\Http\Controllers\termsConditionsController@edit')->name('termsConditions.edit');
    Route::post('/Terms_Conditions/update/{id}', 'App\Http\Controllers\termsConditionsController@update')->name('termsConditions.update');
    Route::delete('/Terms_Conditions/destroy/{id}', 'App\Http\Controllers\termsConditionsController@destroy')->name('termsConditions.destroy');


    // These are TermsConditions routes
    Route::get('/Privacy-Policy', 'App\Http\Controllers\privacyPolicyController@showPage')->name('privacyPolicy');
    Route::get('/Privacy-Policy/create', 'App\Http\Controllers\privacyPolicyController@create')->name('privacyPolicy.create');
    Route::put('/Privacy-Policy/create', 'App\Http\Controllers\privacyPolicyController@store')->name('privacyPolicy.store');
    Route::get('/Privacy-Policy/list', 'App\Http\Controllers\privacyPolicyController@list')->name('privacyPolicy.list');
    Route::get('/Privacy-Policy/edit/{id}', 'App\Http\Controllers\privacyPolicyController@edit')->name('privacyPolicy.edit');
    Route::post('/Privacy-Policy/update/{id}', 'App\Http\Controllers\privacyPolicyController@update')->name('privacyPolicy.update');
    Route::delete('/Privacy-Policy/destroy/{id}', 'App\Http\Controllers\privacyPolicyController@destroy')->name('privacyPolicy.destroy');

    #user profile show
    Route::get('/user-profile', 'App\Http\Controllers\usersController@show')->name('user.profile');
    #user profile edit
    Route::get('/user-profile/edit', 'App\Http\Controllers\usersController@edit')->name('user.edit');
    #user profile update
    Route::put('/user-profile/update/', 'App\Http\Controllers\usersController@update')->name('user.update');


    /////////////////////////////////////////////////////////////////////////////////////////////////
                                    // User's Image Controllers 
    ////////////////////////////////////////////////////////////////////////////////////////////////

    Route::get('/usersImage/create', 'App\Http\Controllers\usersImageController@create')->name('usersImage.create');
    Route::put('/usersImage/create', 'App\Http\Controllers\usersImageController@store')->name('usersImage.store');
    Route::get('/usersImage/list', 'App\Http\Controllers\usersImageController@list')->name('usersImage.list');
    Route::get('/usersImage/edit/{id}', 'App\Http\Controllers\usersImageController@edit')->name('usersImage.edit');
    Route::post('/usersImage/update/{id}', 'App\Http\Controllers\usersImageController@update')->name('usersImage.update');
    Route::DELETE('/usersImage/destroy/{id}', 'App\Http\Controllers\usersImageController@destroy')->name('usersImage.destroy');



});


Route::get('login-with-github', 'App\Http\Controllers\SocialPagesController@loginWithGithub')->name('loginWithGithub');
Route::get('callback-url', 'App\Http\Controllers\SocialPagesController@GithubCallBack')->name('GithubCallBack');

require __DIR__.'/auth.php';
