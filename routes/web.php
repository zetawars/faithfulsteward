<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('login', function () {
//     return view('Panel.Account.login');
// });
Route::get('/login','AccountController@Login')->name('login');
Route::post('/login','AccountController@validateLogin');

Route::get('/register','AccountController@Register')->name('register');
Route::post('/create','AccountController@Create');

Route::get('/logout','AccountController@Logout');

Route::get('/dashboard','OverviewController@Dashboard')->name('dashboard');

Route::get('/course', 'CourseController@General');
Route::get('/course/view','CourseController@viewCourse');
Route::get('/course/manage','CourseController@ManageCourse');
Route::get('/course/newcourse','CourseController@NewCourse');


Route::get('/enroll/learner','LearnerController@EnrollLearner');



Route::get('/mastermind','MastermindController@Mastermind');
Route::get('/mastermind/new','MastermindController@NewMastermind');



Route::get('/category','CategoryController@Category');
Route::get('/category/add','CategoryController@CategoryAdd');



Route::get('/landing','LandingPageController@Index');
Route::get('/landing/add','LandingPageController@AddLanding');

Route::get('/compagin','CompaginController@Index');
Route::get('/compagin/add','CompaginController@CompaginAdd');

Route::get('/project','ProjectController@Index');
Route::get('/project/add','ProjectController@ProjectAdd');
