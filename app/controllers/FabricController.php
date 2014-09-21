<?php

class FabricController extends BaseController {



public function create()
	{
	
		$rules = array(
			'cal_code'    => 'required|alphaNum|unique:fabric,cal_code', 
			'supplier_code'    => 'required|alphaNum|unique:fabric,supplier_code', 
			'file' => 'mimes:jpeg,bmp,png',
		);

		$validator = Validator::make(Input::all(), $rules);

	
		if ($validator->fails()) {
			Session::put('error_message', 'Failed to create fabric.');
			return Redirect::back()->withErrors($validator)
				->withInput(); 
		} 
		else {
		

				$cal_code 	= Input::get('cal_code');
				$supplier_code 	= Input::get('supplier_code');

    			$destinationPath = '';
    			$filename        = '';

    	if (Input::hasFile('file')) {
       		$file            = Input::file('file');
        	$destinationPath = public_path().'/uploads/fabric/';
        	$filename        = str_random(6) . '_' . $file->getClientOriginalName();
        	$uploadSuccess   = $file->move($destinationPath, $filename);
    	}

				$fabric_save= new Fabric;
				$fabric_save->cal_code=$cal_code;
				$fabric_save->supplier_code=$supplier_code;
				$fabric_save->file=$filename;
				$fabric_save->save();
				Session::put('success_message', 'Successfully created fabric '.$cal_code);
				return Redirect::back();
		}
	}
	
	public function search()
	{

	$search_string = Input::get('search');

    $searchTerms = explode(' ', $search_string);

    $query = DB::table('fabric');

    foreach($searchTerms as $term)
    {
        $query->where('cal_code', 'LIKE', '%'. $term .'%')->orWhere('supplier_code', 'LIKE', '%'. $term .'%');
    }

    $results = $query->get();
    return View::make('fabric.list')->with('fabrics',$query);

	}

	public function fabric_view($id)
	{

	$fabric=Fabric::find($id);
    return View::make('fabric.fabric_view')->with('fabric',$fabric);

	}

	public function fabric_debit_view($id)
	{

	$fabric=Fabric::find($id);
    return View::make('fabric.debit')->with('fabric',$fabric);

	}

	public function fabric_credit_view($id)
	{

	$fabric=Fabric::find($id);
    return View::make('fabric.credit')->with('fabric',$fabric);

	}
	public function debit()
	{
		$rules = array(
			'cal_code'    => 'required|alphaNum|exists:fabric,cal_code', 
			'roll_code'    => 'required|alphaNum|exists:rolls,roll_code', 
			'yards'			=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

	
		if ($validator->fails()) {
			Session::put('error_message', 'Failed to debit roll.');
			return Redirect::back()->withErrors($validator)
				->withInput(); 
		} 
		else 
		{

		}
	}

}
