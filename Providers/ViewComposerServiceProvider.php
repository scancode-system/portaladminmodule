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

    }

    public function register() {
        //
    }

}
