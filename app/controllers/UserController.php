<?php

class UserController extends BaseController {

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

public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'username'    => 'required|alphaNum', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			Session::put('message', 'Login failed. Invalid input.');
			return Redirect::to('/')
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'username' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				
				return Redirect::to('/');

			} else {	 	
					Session::put('message', 'Login failed. Username and Password did not match.');

				// validation not successful, send back to form	
				return Redirect::to('/');

			}

		}
	}
	
	public function doLogout()
	{

		Auth::logout(); // log the user out of our application
		Session::put('logout_message', 'You have successfully logged out.');
		return Redirect::to('login'); // redirect the user to the login screen
	}


}
