<?php

namespace App\Services\Testimonials;


class Retrieve {


    static function random() {

        $testimonials = \App\Testimonial::all();

        $testimonialCount = count($testimonials);

        if($testimonialCount > 5) {
            return $testimonials->random(5);
        }
        
        return $testimonials;
    }
}
