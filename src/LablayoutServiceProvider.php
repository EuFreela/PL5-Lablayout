<?php

namespace Lameck\Lablayout;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class LablayoutServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); 
        $this->loadViewsFrom (__DIR__."/./../resources/views","Lameck\Lablayout");
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
            'layout' => [
                $path . "/publishable/layout/edmin" => public_path('lameck/lablayout/edmin'),
            ]
        ];
        foreach($publishable as $group => $paths){
            $this->publishes($paths,$group);
        }
    }

}
