<?php

namespace Iwalpola\XmlDigitalSignature;

use Illuminate\Support\ServiceProvider;

class XmlDigitalSignatureServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('xmldigisig', function () {
            return new XmlDigitalSignature;
        });
    }
}
