<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
 use App\Services\Output\Page\MachineTask;

class MachineTaskServiceProvider extends ServiceProvider
{ 
     /**
    * Create a new service provider instance.
    *
    * @param  \Illuminate\Contracts\Foundation\Application  $app
    * @return void
    */

 


    public function register()
    {
        //
        $this->app->singleton("task", function(){
  
              return new MachineTask;
            
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
