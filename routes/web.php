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
     // Route for Logout
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    // These are TermsConditions routes
    Route::get('/Terms_Conditions/create', 'App\Http\Controllers\termsConditionsController@create')->name('termsConditions.create');
    Route::put('/Terms_Conditions/create', 'App\Http\Controllers\termsConditionsController@store')->name('termsConditions.store');
    Route::get('/Terms_Conditions/list', 'App\Http\Controllers\termsConditionsController@list')->name('termsConditions.list');
    Route::get('/Terms_Conditions/edit/{id}', 'App\Http\Controllers\termsConditionsController@edit')->name('termsConditions.edit');
    Route::post('/Terms_Conditions/update/{id}', 'App\Http\Controllers\termsConditionsController@update')->name('termsConditions.update');
    Route::get('/Terms_Conditions/destroy/{id}', 'App\Http\Controllers\termsConditionsController@destroy')->name('termsConditions.destroy');


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
     Route::get('/Banner/delete/{id}', 'App\Http\Controllers\BannerController@destroy')->name('banner.destroy');
     // Route for Active Banner.
     Route::get('/Banner/statusActive/{id}', 'App\Http\Controllers\BannerController@BannerStatusActive')->name('banner.status.active');
      // Route for DeActive Banner.
     Route::get('/Banner/statusInactive/{id}', 'App\Http\Controllers\BannerController@BannerStatusDisable')->name('banner.status.inactive');




      // These are Category routes
      Route::get('/Category/create', 'App\Http\Controllers\CategoryController@create')->name('category.create');
      Route::put('/Category/create', 'App\Http\Controllers\CategoryController@store')->name('category.store');
      Route::get('/Category/list', 'App\Http\Controllers\CategoryController@list')->name('category.list');
      Route::get('/Category/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');
      Route::post('/Category/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
      Route::get('/Category/delete/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');


      // These are Sub Category routes
      Route::get('/Sub-Category/create', 'App\Http\Controllers\SubCategoryController@create')->name('subCategories.create');
      Route::put('/Sub-Category/create', 'App\Http\Controllers\SubCategoryController@store')->name('subCategories.store');
      Route::get('/Sub-Category/list', 'App\Http\Controllers\SubCategoryController@list')->name('subCategories.list');
      Route::get('/Sub-Category/edit/{id}', 'App\Http\Controllers\SubCategoryController@edit')->name('subCategories.edit');
      Route::post('/Sub-Category/update/{id}', 'App\Http\Controllers\SubCategoryController@update')->name('subCategories.update');
      Route::get('/Sub-Category/delete/{id}', 'App\Http\Controllers\SubCategoryController@destroy')->name('subCategories.destroy');



       // These are Brands routes
       Route::get('/Brands-information/create', 'App\Http\Controllers\BrandsController@create')->name('brands.create');
       Route::put('/Brands-information/create', 'App\Http\Controllers\BrandsController@store')->name('brands.store');
       Route::get('/Brands-information/list', 'App\Http\Controllers\BrandsController@list')->name('brands.list');
       Route::get('/Brands-information/edit/{id}', 'App\Http\Controllers\BrandsController@edit')->name('brands.edit');
       Route::post('/Brands-information/update/{id}', 'App\Http\Controllers\BrandsController@update')->name('brands.update');
       Route::get('/Brands-information/delete/{id}', 'App\Http\Controllers\BrandsController@destroy')->name('brands.destroy');

       
       // These are Suppliers routes
       Route::get('/Suppliers/create', 'App\Http\Controllers\SuppliersController@create')->name('Suppliers.create');
       Route::put('/Suppliers/create', 'App\Http\Controllers\SuppliersController@store')->name('Suppliers.store');
       Route::get('/Suppliers/list', 'App\Http\Controllers\SuppliersController@list')->name('Suppliers.list');
       Route::get('/Suppliers/edit/{id}', 'App\Http\Controllers\SuppliersController@edit')->name('Suppliers.edit');
       Route::post('/Suppliers/update/{id}', 'App\Http\Controllers\SuppliersController@update')->name('Suppliers.update');
       Route::get('/Suppliers/delete/{id}', 'App\Http\Controllers\SuppliersController@destroy')->name('Suppliers.destroy');



       // Route for Brands Active
       Route::get('/Brands-information/statusActive/{id}', 'App\Http\Controllers\BrandsController@BannerStatusActive')->name('banner.status.active');
       // Route for Brands Inactive.
       Route::get('/Brands-information/statusInactive/{id}', 'App\Http\Controllers\BrandsController@BannerStatusDisable')->name('banner.status.inactive');
       
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
