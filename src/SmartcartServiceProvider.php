<?php

namespace Lameck\Smartcart;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class SmartcartServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        Schema::defaultStringLength(191); 
        $this->loadRoutesFrom (__DIR__."/routes/api.php");
        $this->loadViewsFrom (__DIR__."/./../resources/views","Lameck\Smartcart");
     
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPublishables();
    }

    public function registerPublishables()
    {
        $path = dirname(__DIR__);

        $publishable = 
        [
            'migrations' => [
                $path . "/publishable/database/migrations" => database_path('migrations')
            ],
            'seeds' => [
                $path . "/publishable/database/seeds" => database_path('seeds'),
            ]
        ];

        foreach($publishable as $group => $paths){
            $this->publishes($paths,$group);
        }

    }

}
