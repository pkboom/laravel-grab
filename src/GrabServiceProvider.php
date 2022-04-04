<?php

namespace Pkboom\Grab;

use Illuminate\Support\ServiceProvider;

class GrabServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GrabCommand::class,
            ]);
        }
    }
}
