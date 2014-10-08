<?php

use LaravelBook\Ardent\Ardent;

class User extends Ardent
{
	//

	// public static $rules = array(
	// 	'name'                  => 'required', 'between:10,16',
	// 	'email'                 => 'required', 'email', 'unique:users',
	// 	'password'              => 'required', 'alpha_num', 'between:4,8', 'confirmed',
	// 	'password_confirmation' => 'required', 'alpha_num', 'between:4,8',
	// );

	public static $rules = array(
		'name'                  => 'required|between:3,16',
		'email'                 => 'required|email|unique:users',
		'password'              => 'required|alpha_num|between:4,8|confirmed',
		'password_confirmation' => 'required|alpha_num|between:4,8',
	);
}