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
    Route::resource('/personal-details', 'Api\PersonalDetailsController');
    Route::get('/academic-details', 'Backend\ResumeController@academic')->name('academicdetails');
    Route::get('/Job-experience', 'Backend\ResumeController@job')->name('jobexperience');
    Route::get('/What-I-do', 'Backend\ResumeController@whatido')->name('whatido');
    Route::get('/What-they_say', 'Backend\ResumeController@whattheysay')->name('whattheysay');
    Route::get('/interesting-facts', 'Backend\ResumeController@facts')->name('facts');
});


Route::get('/{vue_capture?}', function () {
    return view('welcome');
})->where('vue_capture','[\/\w\.-]*');
