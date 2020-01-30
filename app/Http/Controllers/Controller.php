<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
        if (Auth::check()) {
                $bases = Bases::all();

                if (Session::has('base_id')) {
                    $active_base = Session::get('base_id');
                } else {
                    $active_base = Session::put('base_id', Bases::defaultbase());
                }
                view()->share('bases', $bases );
                view()->share('active_base', $active_base );
        }
    }
}
