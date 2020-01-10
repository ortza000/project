<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('layouts.master');
});


Route::resource('user','UserController');
Route::resource('teacher','TechersController');
Route::resource('course','CourseController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
