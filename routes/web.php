<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\contactform;

// This is main Home page Route Url Start

Route::get('/',function(){
    return view('pages.homepage.index');
});




// //auth route 
// Route::group(['middleware' => ['auth','verified','role:user']], function() { 
//     Route::get('/Userdashboard', 'App\Http\Controllers\DashboardController@userDashboard')->name('userDashboard');
// });

// These are Terms & Conditions routes
Route::get('/terms_Conditions', 'App\Http\Controllers\termsConditionsController@showPage')->name('termsConditions');

// These are Contact routes
Route::get('/contact', 'App\Http\Controllers\ContactPagesController@showPage')->name('contact');
Route::post('/contact/create', 'App\Http\Controllers\ContactPagesController@store')->name('contact.store');

##################################################################################################################################
                                                       # For super administrator
##################################################################################################################################
Route::group(['middleware'=>['auth','role:superadministrator']],function(){    
    Route::get('/admin/dashboard', 'App\Http\Controllers\DashboardController@index')->name('admin.dashboard');
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    // These are TermsConditions routes
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


     // These are Banner routes
     Route::get('/Banner/create', 'App\Http\Controllers\BannerController@create')->name('banner.create');
     Route::put('/Banner/create', 'App\Http\Controllers\BannerController@store')->name('banner.store');
     Route::get('/Banner/list', 'App\Http\Controllers\BannerController@list')->name('banner.list');
     Route::get('/Banner/edit/{id}', 'App\Http\Controllers\BannerController@edit')->name('banner.edit');
     Route::post('/Banner/update/{id}', 'App\Http\Controllers\BannerController@update')->name('banner.update');
     Route::get('/delete/{id}', 'App\Http\Controllers\BannerController@destroy')->name('banner.destroy');


     // These are Contact routes
    Route::get('/contact/list', 'App\Http\Controllers\ContactPagesController@list')->name('contact.list');
    Route::delete('/contact/destroy/{id}', 'App\Http\Controllers\ContactPagesController@destroy')->name('contact.destroy');



});


##################################################################################################################################
                                                       # For User
##################################################################################################################################
Route::group(['middleware' => ['auth']], function(){    
     Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('auth','verified');
     Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');
     #user profile show
     Route::get('/user-profile', 'App\Http\Controllers\usersController@show')->name('user.profile')->middleware('auth','verified');
     #user profile edit
     Route::get('/user-profile/edit', 'App\Http\Controllers\usersController@edit')->name('user.edit')->middleware('auth','verified');
     #user profile update
     Route::put('/user-profile/update/', 'App\Http\Controllers\usersController@update')->name('user.update')->middleware('auth','verified');
 
 
     /////////////////////////////////////////////////////////////////////////////////////////////////
                                     // User's Image Controllers 
     ////////////////////////////////////////////////////////////////////////////////////////////////
 
     Route::get('/usersImage/create', 'App\Http\Controllers\usersImageController@create')->name('usersImage.create')->middleware('auth','verified');
     Route::put('/usersImage/create', 'App\Http\Controllers\usersImageController@store')->name('usersImage.store')->middleware('auth','verified');
     Route::get('/usersImage/list', 'App\Http\Controllers\usersImageController@list')->name('usersImage.list')->middleware('auth','verified');
     Route::get('/usersImage/edit/{id}', 'App\Http\Controllers\usersImageController@edit')->name('usersImage.edit')->middleware('auth','verified');
     Route::post('/usersImage/update/{id}', 'App\Http\Controllers\usersImageController@update')->name('usersImage.update')->middleware('auth','verified');
     Route::DELETE('/usersImage/destroy/{id}', 'App\Http\Controllers\usersImageController@destroy')->name('usersImage.destroy')->middleware('auth','verified');
 
});



Route::get('login-with-github', 'App\Http\Controllers\SocialPagesController@loginWithGithub')->name('loginWithGithub');
Route::get('callback-url', 'App\Http\Controllers\SocialPagesController@GithubCallBack')->name('GithubCallBack');

require __DIR__.'/auth.php';
