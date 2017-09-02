<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Seed' => 'App\Policies\SeedPolicy',
        'App\Onfarm' => 'App\Policies\OnfarmPolicy',
        'App\Activity' => 'App\Policies\ActivityPolicy',
        'App\Poktan' => 'App\Policies\PoktanPolicy',
        'App\Supplier' => 'App\Policies\SupplierPolicy',
        'App\Postharvest' => 'App\Policies\PostharvestPolicy',
        'App\Harvest' => 'App\Policies\HarvestPolicy',
        'App\Transaction' => 'App\Policies\TransactionPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
