<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model {


    public function scopeFeatured($query) {
        return $query->where('is_featured', 1);
    }
}
