<?php

namespace Modules\PortalAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\PortalAdmin\Http\Controllers\BaseController;
use Modules\Portal\Entities\FaqTopic;
use Modules\Portal\Entities\FaqItem;


class FaqItemController extends BaseController
{

    public function index(Request $request, FaqTopic $faq_topic)
    {
        return view('portaladmin::faq_items.index');
    }

    public function create(Request $request, FaqTopic $faq_topic){
        return view('portaladmin::faq_items.create');
    }

    public function store(Request $request, FaqTopic $faq_topic){
        FaqItem::create($request->all()+['faq_topic_id' => $faq_topic->id]);
        return redirect()->route('admin.faq_items', $faq_topic);
    }

    public function edit(Request $request, FaqItem $faq_item){
        return view('portaladmin::faq_items.edit');
    }

    public function update(Request $request, FaqItem $faq_item){
        $faq_item->update($request->all());
       return redirect()->route('admin.faq_items', $faq_item->faq_topic);
    }

    public function destroy(Request $request, FaqItem $faq_item){
        $faq_topic = $faq_item->faq_topic;
        $faq_item->delete();
        return redirect()->route('admin.faq_items', $faq_topic);
    }

}
