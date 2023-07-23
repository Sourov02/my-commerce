<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('website.includes.header', function ($view){
            $view->with('categories', Category::all());
        });
    }
}


//        jodi onek gula view file te dite chai taile array banaia comma comma kore dibo
//        View::composer(['website.includes.header',.........,.......], function ($view){
//            $view->with('categories', Category::all());
//        });

//        jodi frontend backend shob jaygay deua lage taile star* dilei hobe
//        View::composer('*', function ($view){
//            $view->with('categories', Category::all());
//        });
