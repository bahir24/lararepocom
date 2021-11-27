<?php

namespace Bahir24\Lararepocom;

use Bahir24\Lararepocom\Console\InstallCommands;
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
        $this->app->bind(
            RepositoryInterface::class,
            Repository::class
        );
    }
}
