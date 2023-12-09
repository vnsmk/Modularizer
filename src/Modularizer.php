<?php

namespace Vnsmk\Modularizer;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Modularizer extends Command
{
    /**
     * Name and command signature
     *
     * @var string
     */
    protected $signature = 'make:module {namespace} {name}';

    /**
     * command description
     *
     * @var string
     */
    protected $description = 'Generate laravel modules based on providers';


    /**
     * Executes the command
     *
     * @return void
     */
    public function handle()
    {
        try {
            $name = $this->argument('name');
            $namespace = $this->argument('namespace');

            \ModuleBuilder::build($name,$namespace);

            $error = false;
        } catch (\Throwable $e) {
            throw $e;
            $error = true;
        }

        $this->clearCache();
    }

}
