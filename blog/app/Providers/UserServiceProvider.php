<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // in this function we register the maped file        
        $this->UseRepositories();
    }


    // this function map contract with repositories
    protected function UseRepositories()
    {
        $services = [
            'App\Contract\Repositories\User\UserRepository' => 
            'App\Repositories\User\UserRepository'
        ];

        foreach($services as $key => $value){
            $this->app->singleton($key, $value);
        }
    }
}
