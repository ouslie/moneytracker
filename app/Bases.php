<?php

namespace App;

use App\Scopes\BaseScope as BaseScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Bases extends Model
{
    protected $table = 'bases';
    protected $fillable = ['name', 'user_id'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new BaseScope);
    }
}
