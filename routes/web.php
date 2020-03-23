<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});


 Route::resource('fullcalendar-student', 'FullCalendar1Controller');
 Route::resource('fullcalendar1', 'FullCalendarStudentController');


Route::get('/load-events', 'EventcalendarController@loadEvents')->name('routeLoadEvents');

Route::put('/event-update', 'EventcalendarController@update')->name('routeEventUpdate');
Route::post('/event-store', 'EventcalendarController@store')->name('routeEventStore');

Route::delete('/event-destroy', 'EventcalendarController@destroy')->name('routeEventDelete');

// Route::get('/about-us/{course_id}', 'AboutUsController@show')->name('show.id');

Route::resource('project','ProjectController');
Route::get('/search-project', 'ProjectController@search');

Route::resource('event','EventController');
Route::get('/search-event', 'EventController@search');

Route::resource('user','UserController');
Route::get('/search-student', 'UserController@search');

Route::resource('teacher','TechersController');
Route::get('/search-teacher', 'TechersController@search');

Route::resource('Subject','SubjectController');
Route::get('/search-subject', 'SubjectController@search');

Route::resource('course','CourseController');

Route::resource('New-teacher','NewController');
Route::get('/New-app/{id}', 'NewController@show2');
Route::get('/New-event/{id}', 'NewController@show2');
Route::get('/New-course/{id}', 'NewController@show2');
Route::get('/index-course', 'NewController@show')->name('Newcourse');
Route::get('/index-event', 'NewController@show1')->name('Newevent');
Route::resource('course_admin','admin\CourseStatusController');

Route::resource('course_certificate','admin\CourseCertificateController');
Route::post('/checkbox-example', 'admin\CourseCertificateController@store');

Route::get('/course_admin/create/{std_id}/{course_id}', 'admin\CourseStatusController@create');




Route::resource('about-us','AboutUsController');
Route::get('/about-us/{id}', 'AboutUsController@edit');

Route::get('/about-us/detailinvite', 'AboutUsController@show')->name('detailinvite');

Route::resource('faq','FaqController');
Route::resource('portfolio-four','PortfolioFourController');
Route::resource('clients-page','ClientsPageController');
Route::resource('image-upload','ImageResizeController');


Route::resource('course','CourseController');

//image
Route::get('images', 'ImageController@index');
Route::post('save', 'ImageController@save');
 Route::get('image-upload', 'ImageResizeController@index')->name('image-upload');
// Route::post('upload', 'ImageResizeController@store');

//route teacher
Route::resource('clients-page-teacher','teacher\TeacherClientsPageControlle');
Route::resource('faq-teacher','teacher\TeacherFaqController');
Route::resource('course-teacher','teacher\TeacherCourseController');
Route::resource('about-us-teacher','teacher\TeacherAboutUsController');
Route::get('/detail-course/{id}', 'teacher\TeacherAboutUsController@show');




 Auth::routes();
 Route::resource('fileupload', 'fileController');
 Route::post('save', 'fileController@save')->name('fileupload');
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
Route::group(['middleware' => ['teacher']], function () {
    Route::get('/home3', 'admin\TeacherloginController@index');
    Route::get('/clients-page-teacher','teacher\TeacherClientsPageControlle@index')->name('clients-page-teacher');
    Route::get('/about-us-teacher','teacher\TeacherAboutUsController@index1')->name('about-us-teacher');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\AdminController@index');
    });
});




