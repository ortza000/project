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
Route::get('/qustion','QustionController@index');
Route::get('/search-qustion', 'QustionController@search');
Route::get('/qustionindex','QustionController@index2');
Route::get('/qustion/create','QustionController@create');
Route::get('/qustionedit/{id}','QustionController@edit');
Route::patch('/qustiondelete/{id}','QustionController@destroy');
Route::post('/qustion/insert','QustionController@store');
Route::patch('/qustionupdate/{id}','QustionController@update');


Route::resource('project','ProjectController');
Route::get('/search-project', 'ProjectController@search');
Route::get('/searchReport-project', 'ProjectController@search1');

Route::resource('event','EventController');
Route::get('/search-event', 'EventController@search');
Route::get('/searchReport-event', 'EventController@search1');

Route::resource('user','UserController');
Route::get('/search-student', 'UserController@search');
Route::get('/searchReport-student', 'UserController@search1');

Route::resource('teacher','TechersController');
Route::get('/search-teacher', 'TechersController@search');

Route::resource('Subject','SubjectController');
Route::get('/search-subject', 'SubjectController@search');
Route::get('/searchReport-subject', 'SubjectController@search1');

Route::resource('course','CourseController');
Route::get('/course-invite/{id}', 'CourseController@edit');

Route::resource('New-teacher','NewController');
Route::get('/New-app/{id}', 'NewController@show2');
Route::get('/New-event/{id}', 'NewController@show2');
Route::get('/New-course/{id}', 'NewController@show2');

Route::get('/home/{id}', 'HomeController@show1');
Route::get('/home/{id}', 'HomeController@show1');
Route::get('/homeapp', 'HomeController@show');


Route::get('/index-course', 'NewController@show')->name('Newcourse');
Route::get('/index-event', 'NewController@show1')->name('Newevent');
Route::resource('course_admin','admin\CourseStatusController');

Route::resource('course_certificate','admin\CourseCertificateController');
Route::post('/checkbox-example', 'admin\CourseCertificateController@store');

Route::get('/course_admin/create/{std_id}/{course_id}', 'admin\CourseStatusController@create');






Route::resource('faq','FaqController');
Route::resource('portfolio-four','PortfolioFourController');
Route::resource('clients-page','ClientsPageController');

Route::resource('image-upload','ImageResizeController');
Route::post('image-upload/fetch', 'ImageResizeController@fetch')->name('dropdown.fetch');

Route::resource('course','CourseController');
Route::get('/cousreregister/{id}', 'CourseController@edit');


//image
Route::get('images', 'ImageController@index');
Route::post('save', 'ImageController@save');
 Route::get('image-upload', 'ImageResizeController@index')->name('image-upload');
// Route::post('upload', 'ImageResizeController@store');

//route teacher
Route::resource('clients-page-teacher','teacher\TeacherClientsPageControlle');
Route::post('clients-page-teacher/create/create1','teacher\TeacherClientsPageControlle@store1');
Route::resource('faq-teacher','teacher\TeacherFaqController');

Route::resource('course-teacher','teacher\TeacherCourseController');
Route::post('course-teacher/create/create1','teacher\TeacherCourseController@store1');

Route::resource('file-teacher','teacher\fileshowController');
Route::resource('about-us-teacher','teacher\TeacherAboutUsController');
Route::get('/detail-course/{id}', 'teacher\TeacherAboutUsController@show');
Route::resource('about-us','AboutUsController');

 Auth::routes();
 Route::resource('fileupload', 'fileController');
 Route::post('fileupload/fetch', 'fileController@fetch')->name('file.fetch');
 Route::post('fileupload/fetch1', 'fileController@fetch1')->name('file1.fetch');
 Route::post('save', 'fileController@save')->name('fileupload');
// Route::get('/home', 'HomeController@index')->name('index2');
// Route::get('/home', 'HomeController@show');

Route::get('/clients-page/home','HomeController@index')->name('index2');
Route::get('/clients-page/home','HomeController@index')->name('index2');

Route::get('/report_subject','ReportALL@index');
Route::get('/detailreport_subject/{id}','ReportALL@show2');

Route::get('/report_course','ReportALL@index1');
Route::get('/detailreport_course/{id}','ReportALL@show');

Route::get('/report_event','ReportALL@index2');
Route::get('/detailreport_event/{id}','ReportALL@show1');


Route::get('/report_studentold','ReportALL@index3');

Route::get('/report_cert','ReportALL@index4');
Route::get('/detailreport_cert/{id}','ReportALL@show3');
Route::get('/searchReport-cert', 'ReportALL@search');

//fullcalender

Route::get('/fullcalendareventmaster','FullCalendarEventMasterController@index');

Route::post('/fullcalendareventmaster/create','FullCalendarEventMasterController@create');

Route::post('/fullcalendareventmaster/update','FullCalendarEventMasterController@update');

Route::post('/fullcalendareventmaster/delete','FullCalendarEventMasterController@destroy');
//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'HomeController@show');
    Route::get('/about-us', 'AboutUsController@index1')->name('about-us');
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




