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
//Landing Page (Home Page)
Route::get('/', 'HomepageController@index')->name('homepage');

//Post Comment
Route::post('/post-comment', function(){
	return view('/post-comment');
});
//Upload Files
Route::post('/Upload', function(){
	return view('/upload');
});

//Delete User Account
Route::delete('/delete-user-account', function(){
	return view('/delete-user-account');
});
//Update User Profile
Route::put('/update-user-profile', function(){
	return view('/update-user-profile');
});

//User Profile
Route::get('/User-profile', function(){
	return view('/user-profile');
});

//Controls Login, Register, Reset password user
Route::auth();

