<?php

namespace Modules\PortalAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\PortalAdmin\Http\Controllers\BaseController;
use Modules\Portal\Entities\Company;
use Modules\Portal\Entities\Event;
use Illuminate\Support\Facades\Auth;


class EmailController extends BaseController
{


    public function import(Request $request, $company64, $event64)
    {
        $company = Company::find(base64_decode($company64));
        $event = Event::find(base64_decode($event64));
        $event->update(['selected' => 1]);

        Auth::guard('company')->loginUsingId($company->id);
        return redirect()->route('portal.main', 1);
    }


}
