<?php

namespace App\Services\Testimonials;


class Retrieve {


    static function random($type = null) {

        $testimonials = $type ? \App\Testimonial::where('type', $type)->get() : \App\Testimonial::all();

        $testimonialCount = count($testimonials);

        return $testimonialCount > 5 ? $testimonials->random(5) : $testimonials;
    }
}
