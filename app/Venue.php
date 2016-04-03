<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model {


    public function scopeFeatured($query) {
        return $query->where('is_featured', 1);
    }

    public function scopeVerified($query) {
        return $query->where('verified', 1);
    }

    public function scopeNotVerified($query) {
        return $query->where('verified', 0);
    }
}
