<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Auth\Events\Authenticated;
use App\Bases;
use Session;
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

        // \URL::forceScheme('https');
        $this->app['events']->listen(Authenticated::class, function () {
                $bases = Bases::all();

                if (Session::has('base_id')) {
                    $active_base = Session::get('base_id');
                } else {
                    $active_base = Session::put('base_id', Bases::defaultbase());
                }
                view()->share('bases', $bases );
                view()->share('active_base', $active_base );
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
