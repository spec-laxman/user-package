<?php
namespace SpecIndia\User;


use \Illuminate\Support\ServiceProvider;
class UserServiceProvider extends ServiceProvider
{
    public function boot(){
    $this->loadRoutesFrom(__DIR__."/routes/web.php");
    $this->loadViewsFrom(__DIR__.'/resources/views', 'user');
    $this->publishes([
        __DIR__.'/resources/views' => resource_path('views/user'),
    ]);

    }
    public function register(){
        
    }
}