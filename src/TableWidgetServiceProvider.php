<?php

declare(strict_types = 1);

namespace DigitalCreative\TableWidget;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class TableWidgetServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Nova::serving(static function (ServingNova $event): void {

            Nova::script('table-widget', __DIR__ . '/../dist/js/card.js');
            Nova::style('table-widget', __DIR__ . '/../dist/css/card.css');

        });
    }
}
