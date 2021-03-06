<?php

namespace Modules\PortalAdmin\Http\ViewComposers\Events;

use Modules\Portal\Http\ViewComposers\SuperComposer\SuperComposer;
use Modules\Portal\Entities\Event;
use Modules\Portal\Entities\Validation;
use Modules\Portal\Entities\Setting;
use Modules\Portal\Entities\Append;
use Illuminate\View\View;

class EditComposer extends SuperComposer {

    private $event;
    private $validations;
    private $settings;
    private $appends; 

    public function assign($view){
        $this->event();
        $this->validations();
        $this->settings();
        $this->appends();
    }


    public function event(){
        $this->event = request()->route('event');
    }

    
    public function validations(){
        $validations = Validation::all();
        $event_validations = $this->event->event_validations;

        
        foreach ($validations as $validation) 
        {
            $validation->checked = false;
            foreach ($event_validations as $event_validation) {
                if($event_validation->validation->id == $validation->id)
                {
                    $validation->checked = true;
                }
            }
        }

        $this->validations = $validations;
    }


    public function settings(){
        $settings = Setting::all();
        $event_settings = $this->event->event_settings;

        
        foreach ($settings as $setting) 
        {
            $setting->checked = false;
            foreach ($event_settings as $event_setting) {
                if($event_setting->setting->id == $setting->id)
                {
                    $setting->checked = true;
                }
            }
        }

        $this->settings = $settings;
    }

    public function appends()
    {
        $appends = Append::all();
        $event_appends = $this->event->event_appends;

        $event_validation_appends = $this->event->event_validation_appends;

        foreach ($appends as $append) 
        {
            $append->checked = false;
            foreach ($event_validation_appends as $event_validation_append) {
                if($event_validation_append->appendModel->id == $append->id)
                {
                    $append->checked = true;
                }
            }
        }

        $this->appends = $appends;
    }


    public function view($view){
        $view->with('event', $this->event);
        $view->with('validations', $this->validations);
        $view->with('settings', $this->settings);
        $view->with('appends', $this->appends);
    }


}
