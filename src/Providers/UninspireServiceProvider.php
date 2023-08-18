<?php

use Illuminate\Support\ServiceProvider;

class UninspireServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->commands(
            commands: [
                UninspireCommand::class
            ]
        );
    }
}