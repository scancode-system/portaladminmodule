<?php

namespace Modules\PortalAdmin\Http\Controllers;

use App\Http\Controllers\Controller;

class BaseController extends Controller 
{

	public function __construct()
	{
		$this->middleware('auth:admin');
	}


	public function home(){
		return redirect()->route('admin.companies');
		//dd('sd');
	}

}
