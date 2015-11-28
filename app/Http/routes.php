<?php

//use Illuminate\Routing\Route;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', ['middleware' => 'auth',function () {
    return view('home');
}]);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route::get('auth/register', ['middleware' => 'auth','uses'=>'Auth\AuthController@getRegister']);
// Route::post('auth/register',['middleware' => 'auth','uses'=>'Auth\AuthController@postRegister']);

//Route::get('faculty', 'FacultyController@index');
Route::resource('faculty', 'FacultyController');
Route::resource('users', 'UserController');

Route::get('institute', 'InstituteController@index');
Route::get('students', 'StudentsController@index');

