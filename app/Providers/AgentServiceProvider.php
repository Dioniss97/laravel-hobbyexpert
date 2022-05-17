<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Jenssegers\Agent\Agent;

class AgentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Instanciar el objeto
        $agent = new Agent();

        // View::share('nombre de la librería', $variable que es una instancia del objeto o la librería);
        View::share('agent', $agent);
    }
}
