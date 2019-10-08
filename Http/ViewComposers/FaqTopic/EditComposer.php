<?php

namespace Modules\PortalAdmin\Http\ViewComposers\FaqTopic;

use Modules\Portal\Http\ViewComposers\SuperComposer\SuperComposer;
use Modules\Portal\Entities\Event;
use Illuminate\View\View;

class EditComposer extends SuperComposer {

    private $faq_topic;
  

    public function assign($view){
        $this->faq_topic();
    }

    public function faq_topic(){
        $this->faq_topic = request()->route('faq_topic');
    }

    public function view($view){
        $view->with('faq_topic', $this->faq_topic);
    }

}
