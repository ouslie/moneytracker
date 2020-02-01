<?php

namespace App;

use App\Scopes\UserScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Bases extends Model
{
    protected $table = 'bases';
    protected $fillable = ['name', 'user_id'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new UserScope);
    }

    public static function defaultBase() {

        $base = Bases::where('is_default', '=', 1)->first();

        if($base->count() == 1) {
            $base_id =  $base->id;
        } else {
            $base = Bases::first();
            $base_id =  $base->id;
        }
        return $base_id;
    }

    public static function activeBase()
    {
        return Session::get('base_id');
    }
}
