<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('admin_home');

//    Resume

    Route::resource('personal-details', 'Backend\PersonalDetailsController');
    Route::resource('academic-details', 'Backend\AcademicDetailsController');
    Route::resource('job-experience', 'Backend\JobExperienceController');
    Route::resource('What-I-do', 'Backend\WhatIDoController');
    Route::resource('testimonials', 'Backend\TestimonialController');
    Route::resource('interesting-facts', 'Backend\CounterController');
    Route::resource('work-details', 'Backend\WorkDetailsController');

//    Portfolio
    Route::get('portfolio/category-create', 'Backend\CategoryController@cat_create')->name('category_add');
    Route::post('portfolio/category-store', 'Backend\CategoryController@cat_store')->name('category_store');

    Route::get('portfolio', 'Backend\PortfolioController@index')->name('portfolio');

});

Route::get('/{vue_capture?}', function () {
    return view('welcome');
})->where('vue_capture','[\/\w\.-]*');
