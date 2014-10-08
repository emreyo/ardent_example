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

// test 'User' model
Route::get('user', function()
{
	$user = new User;

	$user->name = "11";
	$user->email = "dsa";

	if ($user->save())
		return Redirect::to('/')->with('message', 'Thanks for registering!');
	else
		return Redirect::to('/')->withErrors($user->errors());
});

//test 'Test' model
Route::get('test', function()
{
	$test = new Test;

	if ($test->save())
		return Redirect::to('/')->with('message', 'Thanks for registering!');
	else
		return Redirect::to('/')->withErrors($test->errors());
});

Route::get('/', function()
{
	return View::make('hello');
});