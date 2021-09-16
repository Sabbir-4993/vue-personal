<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/personal-details','Api\HomeDetailsController@personaldetails');
Route::get('/academic-details','Api\HomeDetailsController@academicdetails');
Route::get('/work-details','Api\HomeDetailsController@workdetails');
Route::get('/what-I-do','Api\HomeDetailsController@whatido');
Route::get('/testimonials','Api\HomeDetailsController@testimonial');
Route::get('/counters','Api\HomeDetailsController@counter');

