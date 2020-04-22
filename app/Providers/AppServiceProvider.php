<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\ShoppingCart;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function($view){
               //este dato esta disponible en todas mis vistas
        
        //identificando la session
        $sessionName = 'shopping_cart_id';
        $shopping_cart_id = \Session::get($sessionName);
        // o session($sessionName);
        // o \Session::get($sessionName);
        $shopping_cart = ShoppingCart::findOrCreateById($shopping_cart_id);
        \Session::put($sessionName, $shopping_cart->id);

        $view->with('productsCount', $shopping_cart->id);
        });
    }
}
