<?php

namespace Modules\PortalAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\PortalAdmin\Http\Controllers\BaseController;
use Modules\Portal\Entities\FaqTopic;


class FaqTopicController extends BaseController
{

    public function index(Request $request)
    {
        return view('portaladmin::faq_topics.index');
    }

    public function create(Request $request){
        return view('portaladmin::faq_topics.create');
    }

    public function store(Request $request){
        FaqTopic::create($request->all());
        return redirect()->route('admin.faq_topics');
    }

    public function edit(Request $request, FaqTopic $faq_topic){
        return view('portaladmin::faq_topics.edit');
    }

    public function update(Request $request, FaqTopic $faq_topic){
        $faq_topic->update($request->all());
        return redirect()->route('admin.faq_topics');
    }

    public function destroy(Request $request, FaqTopic $faq_topic){
        $faq_topic->delete();
        return redirect()->route('admin.faq_topics');
    }

}
