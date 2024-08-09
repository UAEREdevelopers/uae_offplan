<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Front End Routes
Route::get('/', 'FrontEndController@home')->name('website');
Route::get('/about', 'FrontEndController@about')->name('website.about');
Route::get('/category/{slug}', 'FrontEndController@category')->name('website.category');

Route::post('/contact', 'FrontEndController@send_message')->name('website.contact');

// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::resource('amenity', 'AmenityController');

    Route::resource('developer', 'DeveloperController');
    Route::resource('enquiry', 'EnquiryController');
    Route::resource('property', 'PropertyController');


    Route::resource('user', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');
    
    // setting
    Route::get('setting', 'SettingController@edit')->name('setting.index');
    Route::post('setting', 'SettingController@update')->name('setting.update');

    
});

Route::get('send_hero_enquiry/{slug}', 'EnquiryController@sendHeroEnquiry')->name('send_hero_enquiry');

Route::get('send_bottom_enquiry/{slug}', 'EnquiryController@sendBottomEnquiry')->name('send_bottom_enquiry');

Route::get('send_enquiry/{slug}', 'EnquiryController@sendEnquiry')->name('send_enquiry');

Route::get('send_enquiry_home/{slug}', 'EnquiryController@sendEnquiryHome')->name('send_enquiry_home');

Route::get('check_mail', 'EnquiryController@checkMail')->name('check_mail');
