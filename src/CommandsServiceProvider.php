<?php

namespace Bahir24\Commands;

use Bahir24\Commands\Console\InstallCommands;
use Illuminate\Support\ServiceProvider;

class CommandsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommands::class,
            ]);
        }
    }
}
