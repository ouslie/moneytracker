<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\BaseScope;

class Account extends Model
{
    protected $table = 'account';
    protected $fillable = ['name', 'base_id', 'start_amount'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new BaseScope);
    }
}
