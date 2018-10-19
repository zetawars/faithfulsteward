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