<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function showHome()
	{
		return View::make('portfolio');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function sayHello($name){

		    return View::make('say-hello')->with('viewName', $name);
	}

	public function rollDice($guess){

	    $rand = mt_rand(1, 6);

	    $array = ['guess' => $guess, 'rand' => $rand];

	    return View::make('roll-dice')->with($array);
	}

 public function showLogin(){

 	return View::make('login');
 }

 public function doLogin(){

 	$email = Input::get('email');
 	$password = Input::get('password');


 	if (Auth::attempt(array('email' => $email, 'password' => $password))) {
 	    return Redirect::intended('posts');
 	} else {
 	    Session::flash('errorMessage', "Failed to authenticate.");

 	    return Redirect::back();
 	}

 }

 public function doLogout(){

 	Auth::logout();

 	return Redirect::action('HomeController@showLogin');
 }

}//closes class



