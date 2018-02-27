<?php

namespace App\Providers;

use App\Harvest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebars.admin', function($view)
        {
            $view->with('newSales', \App\Transaction::where('status_id', 1)->count());
        });

        Validator::extend('stockIsNotEmpty', function ($attribute, $value, $parameters, $validator) {
            $harvest = Harvest::findOrFail($value);
            return $harvest->ending_stock != 0;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
