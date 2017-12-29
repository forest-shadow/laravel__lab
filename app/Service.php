<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public static function boot()
    {
        parent::boot();

        static::saving( function($model) {
            $model->slug = str_slug($model->name);
        } );
    }
}
