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
	return View::make('home');
});
Route::group(array('before' => "auth"), function() {

Route::get('event/create', function()
{
	return View::make('createentry');
});
Route::post('/event/create/add','EventController@add_details');
Route::get('/myevent','EventController@my_event');
Route::get('/event/edit/{id}','EventController@edit_event');
Route::post('/event/edit/add/{id}','EventController@add_edit_event');

Route::get('/updatepersonaldetail','UsersController@update_personal_detail');
Route::post('/updatepersonaldetail/add','UsersController@add_update_personal_detail');
Route::get('/changepassword','UsersController@change_password');
Route::post('/changepassword/add','UsersController@add_change_password');

Route::get('/companydetails','UsersController@company_details');
Route::post('/companydetails/add','UsersController@company_details_add');

Route::get('/logout','UsersController@logout');
});
Route::get('/signup','UsersController@sign_up');
Route::post('/addsignup','UsersController@add_signu_up');
Route::post('validatelogin','UsersController@validate_login');

Route::get('/login',function(){
 	 if(Auth::check()){
 	 	return Redirect::to("addevent");
 	 }
 	 // return Hash::make('123');
 	 return View::make("login");
 });
Route::get('/loginfb','UsersController@login_fb');
Route::get('/loginfb/callback','UsersController@login_fb_callback');

