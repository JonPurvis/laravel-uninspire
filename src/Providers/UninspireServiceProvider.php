<?php

declare(strict_types=1);

namespace JonPurvis\Uninspire\Providers;

use Illuminate\Support\ServiceProvider;
use JonPurvis\Uninspire\Console\Commands\UninspireCommand;

class UninspireServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    UninspireCommand::class
                ]
            );
        }
    }
}