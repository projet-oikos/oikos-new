<?php

namespace App\Providers;

use App\Brand;
use App\Policies\BrandPolicy;
use App\User;
use function foo\func;
use App\Policies\ProductPolicy;
use App\Product;
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

        'App\Model' => 'App\Policies\ModelPolicy',
        Brand::class => BrandPolicy::class,
        Product::class => ProductPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


    }
}
