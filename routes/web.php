<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/123', function () {
    return view('fullcal');
});



Route::resource('project','ProjectController');
Route::resource('event','EventController');

Route::resource('user','UserController');
Route::resource('teacher','TechersController');
Route::resource('course','CourseController');
Route::resource('about-us','AboutUsController');
Route::resource('faq','FaqController');
Route::resource('portfolio-four','PortfolioFourController');
Route::resource('clients-page','ClientsPageController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('index2');
Route::get('/home', 'EventController@index2')->name('clients-page');
Route::get('/clients-page/home','HomeController@index')->name('index2');

//fullcalender

Route::get('/fullcalendareventmaster','FullCalendarEventMasterController@index');

Route::post('/fullcalendareventmaster/create','FullCalendarEventMasterController@create');

Route::post('/fullcalendareventmaster/update','FullCalendarEventMasterController@update');

Route::post('/fullcalendareventmaster/delete','FullCalendarEventMasterController@destroy');
//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\AdminController@index');
    });
});
