<?php

namespace Vnsmk\Modularizer;

use Illuminate\Support\ServiceProvider;

class ModularizerServiceProvider extends ServiceProvider
{

    protected $commands = [
        'Vnsmk\Modularizer\Modularizer',
    ];

    public function register()
    {
        $this->commands($this->commands);

        $this->mergeConfigFrom(
            __DIR__.'/../config/modularizer.php', 'modularizer'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/modularizer.php' => config_path('modularizer.php')
        ]);
    }
}
