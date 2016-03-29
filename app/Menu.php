<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function meals() {
        return $this->hasMany(\App\Meal::class);
    }

    public function categories() {
        return $this->hasMany(\App\Category::class);
    }

    public function scopeNormal($query) {
        return $query->where('type', 'default');
    }

    public function scopeWedding($query) {
        return $query->where('type', 'wedding');
    }
}
