<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function menu() {
        return $this->belongsTo('App\Menu');
    }

    public function meals() {
        return $this->hasMany('App\Meal');
    }
}
