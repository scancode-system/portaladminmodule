<?php

namespace Modules\PortalAdmin\Http\ViewComposers\FaqItem;

use Modules\Portal\Http\ViewComposers\SuperComposer\SuperComposer;
use Modules\Portal\Entities\Event;
use Illuminate\View\View;

class EditComposer extends SuperComposer {

    private $faq_item;

    public function assign($view){
        $this->faq_item();
    }

    public function faq_item(){
        $this->faq_item = request()->route('faq_item');
    }

    public function view($view){
        $view->with('faq_item', $this->faq_item);
    }

}
