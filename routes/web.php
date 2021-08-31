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
Route::get('/resume', 'PageController@resume')->name('resume');
Route::get('/portfolio', 'PageController@portfolio')->name('portfolio');
Route::get('/portfolio/details', 'PageController@portfoliodetails')->name('portfolio_details');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/blog/details', 'PageController@blogdetails')->name('blog_details');
Route::get('/contact', 'PageController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
