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

Route::get('/', 'PageController@home')->name('index');

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('admin_home');
Route::get('/admin/personal-details', 'Backend\ResumeController@personaldetails')->name('personaldetails');
Route::get('/admin/academic-details', 'Backend\ResumeController@academic')->name('academicdetails');
Route::get('/admin/Job-experience', 'Backend\ResumeController@job')->name('jobexperience');
Route::get('/admin/What-I-do', 'Backend\ResumeController@whatido')->name('whatido');
Route::get('/admin/What-they_say', 'Backend\ResumeController@whattheysay')->name('whattheysay');
Route::get('/admin/interesting-facts', 'Backend\ResumeController@facts')->name('facts');
