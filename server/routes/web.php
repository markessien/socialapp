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

//User Profile
Route::get('/User-profile', function(){
	return view();
});

//Login
Route::post('/login', function(){

});


//Sign Up
Route::post('/sign-up', function(){

});

//Post Comment
Route::post('/post-comment', function(){

});

//Upload Files
Route::post('/Upload', function(){

});

//Update User Profile
Route::put('/update-user-profile', function(){

});

//Reset User Password
Route::put('/reset-user-password', function(){

});

//Delete User Account
Route::delete('/delete-user-account', function(){

});

