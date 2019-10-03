<?php

namespace Modules\PortalAdmin\Http\ViewComposers\Companies;

use Modules\Portal\Http\ViewComposers\SuperComposer\SuperComposer;
use Modules\Portal\Entities\Company;
use Illuminate\View\View;

class IndexComposer extends SuperComposer {

    private $companies;

    public function view($view){
        $view->with('companies', $this->companies);
    }

    public function assign($view){
        $this->companies();
    }

    public function companies(){
        $this->companies = Company::all();
    }

}
