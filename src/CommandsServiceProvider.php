<?php

namespace Bahir24\Lararepocom;

use Bahir24\Lararepocom\Console\RepositoryMakeCommand;
use Bahir24\Lararepocom\Console\DtoMakeCommand;
use Bahir24\Lararepocom\Console\EnumMakeCommand;
use Bahir24\Lararepocom\Console\ServiceMakeCommand;
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
                RepositoryMakeCommand::class,
                DtoMakeCommand::class,
                EnumMakeCommand::class,
                ServiceMakeCommand::class,
                ValueObjectMakeCommand::class,
            ]);
        }
        $this->app->bind(
            RepositoryInterface::class,
            Repository::class
        );
    }
}
