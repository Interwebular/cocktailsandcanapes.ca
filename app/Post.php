<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public function user() {
        return $this->belongsTo(\App\User::class);
    }

    // public function slugExists($slug) {
    //     return $this->where('slug', $slug)->first();
    // }

}
