<?php

namespace LaravelSchema\Persons;

use Illuminate\Support\ServiceProvider;

class PersonsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/persons.php' => config_path('persons.php'),
        ]);
    }
    public function register()
    {
        
    }
}