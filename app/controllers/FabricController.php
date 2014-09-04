<?php

class FabricController extends BaseController {

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

public function create()
	{
	
		$rules = array(
			'name'    => 'required|alphaNum', 
	
		);

		$validator = Validator::make(Input::all(), $rules);

	
		if ($validator->fails()) {
			Session::put('message', 'Invalid input.');
			return Redirect::back()
				->withInput(); 
		} 
		else {
		

				$name 	= Input::get('name');
			
    			$destinationPath = '';
    			$filename        = '';

    	if (Input::hasFile('file')) {
       		$file            = Input::file('file');
        	$destinationPath = public_path().'/uploads/fabric/';
        	$filename        = str_random(6) . '_' . $file->getClientOriginalName();
        	$uploadSuccess   = $file->move($destinationPath, $filename);
    	}


				$savefabric= new Fabric;
				$savefabric->name=$name;
				$savefabric->file=$destinationPath.$filename;
				$savefabric->save();
					return Redirect::back();

		}
	}
	



}
