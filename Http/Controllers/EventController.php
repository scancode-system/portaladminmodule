<?php

namespace Modules\PortalAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\PortalAdmin\Http\Controllers\BaseController;
use Modules\Portal\Entities\Company;
use Modules\Portal\Entities\Event;
use Modules\PortalAdmin\Http\Requests\RequestEvent;


class EventController extends BaseController
{


    public function index(Request $request, Company $company)
    {
        return view('portaladmin::events.index');
    }


    public function store(RequestEvent $request)
    {
        Event::create($request->all());
        return back();
    }


    public function destroy(Request $request, Company $company, Event $event){
        $event->delete();
        return back();
    }




}
