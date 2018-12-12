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
Route::get('/edituser/course','CourseController@EditUserCourse');


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
Route::get('/project/view','ProjectController@ProjectView');

Route::get('/users','UserController@Index');
Route::get('/users/add','UserController@UserAdd');
Route::get('/users/profile','UserController@UserProfile');
Route::get('/edituser/account','UserController@EditAccountInfo');
Route::get('/edituser/more','UserController@EditUserMore');
Route::get('/edituser/detail','UserController@EditDetail');


Route::get('/report','ReportController@Index');
Route::get('/report/view','ReportController@View');
Route::get('/report/custom','ReportController@CustomReport');
Route::get('/report/userreport','ReportController@UserReport');



Route::get('/setting','SettingController@Index');
//................................................................
Route::get('/instructor/index','Instructor\DashboardController@Index');

Route::get('/instructor/courses','Instructor\CoursesController@Index');

Route::get('/instructor/coursecatelog','Instructor\CourseCatelogController@Index');

Route::get('/instructor/report','Instructor\ReportController@Index');
Route::get('/instructor/customreport','Instructor\ReportController@CustomReport');

Route::get('/instructor/account','Instructor\AccountController@Index');
//...................................................................................
Route::get('/learner/coursedetail','Learner\CourseController@CourseDetail');
Route::get('/learner/bilicalfinance','Learner\CourseController@Bibilical');
Route::get('/learner/biography','Learner\CourseController@Biography');
Route::get('/learner/course','Learner\CourseController@Courses');
Route::get('/learner/coursecatelog','Learner\CourseController@CourseCatelog');
Route::get('/learner/project','Learner\ProjectController@Index');
Route::get('/learner/dashboard','Learner\DashboardController@Index');
Route::get('/learner/account','Learner\AccountController@Index');
//..................................................................................
Route::get('/archive/quiz','Archive\ArchiveController@Quiz');
Route::get('/archive/lesson','Archive\ArchiveController@Lesson');


