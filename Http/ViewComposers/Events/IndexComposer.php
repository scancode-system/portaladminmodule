<?php

namespace Modules\PortalAdmin\Http\ViewComposers\Events;

use Modules\Portal\Http\ViewComposers\SuperComposer\SuperComposer;
use Modules\Portal\Entities\Event;
use Illuminate\View\View;

class IndexComposer extends SuperComposer {


    private $company;
    private $events;
    

    public function assign($view){
        $this->company();
        $this->events();
    }


    public function company(){
        $this->company = request()->route('company');
    }

    
    public function events(){
        $this->events = $this->company->events;
    }

    
    public function view($view){
        $view->with('company', $this->company);
        $view->with('events', $this->events);
    }


}
