<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Bases as Bases;

class BasesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {       
        //compose all the views....
        view()->composer('*', function ($view) 
        {
            $bases = Bases::all();
            //...with this variable
            $view->with('bases', $bases );    
        });  

        // $toto = Bases::all();
        // echo ($toto);
        // View::share('key', 'value');
    }
}