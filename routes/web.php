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
    return view('introduction');
});

Route::get('/{user_id}',function ($user_id) {
	return view('profile',['user_id' => $user_id]);
});

Route::get('/home',function ($user_id) {
	return view('homePage',['user_id' => $user_id]);
});

Route::get('/settings',function ($user_id) {
	return view('settings',['user_id' => $user_id]);
});

Route::post('/add/task','tasksController@addTask');
Route::post('/add/user','usersController@addUser');

Route::post('/delete/task','tasksController@deleteTask');
Route::post('/delete/user','usersController@deleteUser');

Route::post('/update/task','tasksController@updateTask');
Route::post('/update/user','usersController@updateUser');


