<?php

namespace Modules\PortalAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\PortalAdmin\Http\Controllers\BaseController;
use Modules\Portal\Entities\Company;
use Modules\Portal\Entities\Event;
use Modules\PortalAdmin\Http\Requests\RequestEvent;
use Modules\Portal\Entities\EventSetting;

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

    public function edit(Request $request,  Company $company, Event $event){
        return view('portaladmin::events.edit');
    } 

    public function updateValidations(Request $request, Event $event)
    {
        $boolean_validations = $request->validations;
        $validations = $event->validations;
        foreach ($boolean_validations as $validation_id => $boolean) 
        {
            $has = false;
            foreach ($validations as $validation) 
            {
                if($validation->id == $validation_id)
                {
                    $has = true;
                }
            }
            if($boolean && !$has){
                $event->validations()->attach($validation_id);
            }
            if($has && !$boolean){
                $event->validations()->detach($validation_id);
            }
        }
        return back()->with('success_validation', 'As validações para o evento foram alteradas.');
    }


    public function updateSettings(Request $request, Event $event)
    {
        $boolean_settings = $request->settings;
        $settings = $event->settings;
        foreach ($boolean_settings as $setting_id => $boolean) 
        {
            $has = false;
            foreach ($settings as $setting) 
            {
                if($setting->id == $setting_id)
                {
                    $has = true;
                }
            }
            if($boolean && !$has){
                $event->settings()->attach($setting_id);
            }
            if($has && !$boolean){
                $event_setting = EventSetting::where('event_id', $event->id)->where('setting_id', $setting_id)->first();
                $event_setting->delete();
                //$event->settings()->detach($setting_id);
            }
        }
        return back()->with('success_setting', 'As configurações para o evento foram alteradas.');
    }

}
