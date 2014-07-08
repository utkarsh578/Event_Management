<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/login',function(){
 	 if(Auth::check()){
 	 	return Redirect::to("addevent");
 	 }
 	 // return Hash::make('123');
 	 return View::make("login");
 });
Route::get('/loginfb','UsersController@login_fb');
Route::get('/loginfb/callback','UsersController@login_fb_callback');

Route::group(array('before' => "auth"), function() {
Route::get('event/create', function()
{
	return View::make('createentry');
});
Route::post('/event/create/add','EventController@add_details');
});