<?php

namespace Modules\PortalAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\PortalAdmin\Http\Controllers\BaseController;
use Modules\Portal\Entities\Company;
use Modules\Portal\Entities\Event;
use Illuminate\Support\Facades\Auth;


class CompanyController extends BaseController
{


    public function index(Request $request)
    {
        return view('portaladmin::companies.index');
    }


    public function destroy(Request $request, Company $company){
        $company->delete();
        return back();
    }


    public function login(Request $request, Company $company){
        Auth::guard('company')->loginUsingId($company->id);
        return redirect()->route('portal.dashboard');
    }


}
