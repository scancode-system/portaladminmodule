<?php

namespace Modules\PortalAdmin\Http\ViewComposers\FaqTopic;

use Modules\Portal\Http\ViewComposers\SuperComposer\SuperComposer;
use Modules\Portal\Entities\FaqTopic;
use Illuminate\View\View;

class IndexComposer extends SuperComposer {

    private $faq_topics;
    

    public function assign($view){
        $this->faq_topics();
    }

    public function faq_topics(){
        $this->faq_topics = FaqTopic::all();
    }
    
    public function view($view){
        $view->with('faq_topics', $this->faq_topics);
    }

}
