<?php

namespace App\Providers;

use App\Http\Controllers\SomeConcrete;
use App\Http\Controllers\SomeInterface;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Foo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind(SomeInterface::class, SomeConcrete::class);
        $this->app->when(Foo::class)->needs(SomeInterface::class)->give(function() {
            return new SomeConcrete();
        });
    }
}
