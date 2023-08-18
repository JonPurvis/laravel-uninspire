<?php

use Illuminate\Console\GeneratorCommand;

abstract class UninspireCommand extends GeneratorCommand
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'uninspire';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Display an uninspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): mixed
    {
        $this->info('testing');

        return GeneratorCommand::SUCCESS;
    }

}