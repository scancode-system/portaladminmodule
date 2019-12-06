<?php

namespace Modules\PortalAdmin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider {

	public function boot() {
        // companies
		View::composer('portaladmin::companies.index', 'Modules\PortalAdmin\Http\ViewComposers\Companies\IndexComposer');

        // events
		View::composer('portaladmin::events.index', 'Modules\PortalAdmin\Http\ViewComposers\Events\IndexComposer');
		View::composer('portaladmin::events.edit', 'Modules\PortalAdmin\Http\ViewComposers\Events\EditComposer');

		// faq topics
		View::composer('portaladmin::faq_topics.index', 'Modules\PortalAdmin\Http\ViewComposers\FaqTopic\IndexComposer');
		View::composer('portaladmin::faq_topics.edit', 'Modules\PortalAdmin\Http\ViewComposers\FaqTopic\EditComposer');

		// faq items
		View::composer('portaladmin::faq_items.index', 'Modules\PortalAdmin\Http\ViewComposers\FaqItem\IndexComposer');
		View::composer('portaladmin::faq_items.create', 'Modules\PortalAdmin\Http\ViewComposers\FaqItem\CreateComposer');		
		View::composer('portaladmin::faq_items.edit', 'Modules\PortalAdmin\Http\ViewComposers\FaqItem\EditComposer');		

	}

	public function register() {
        //
	}

}
