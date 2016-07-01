<?php

namespace App\Providers;

use App\Auth\DPRFSegurancaProvider;
use Illuminate\Support\ServiceProvider;
use PRF\RH;

class DPRFSegurancaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['auth']->provider('dprfseguranca',function()
        {
            return new DPRFSegurancaProvider(new RH());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
