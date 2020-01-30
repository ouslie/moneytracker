<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\BaseScope;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'base_id'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new BaseScope);
    }
}
