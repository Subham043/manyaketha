<?php

namespace App\Modules\Testimonial\Services;

use App\Modules\Testimonial\Models\TestimonialHeading;
use Illuminate\Support\Facades\Cache;

class TestimonialHeadingService
{

    public function getById(Int $id): TestimonialHeading|null
    {
        return Cache::remember('testimonial_heading_'.$id, 60*60*24, function() use($id){
            return TestimonialHeading::where('id', $id)->first();
        });
    }

    public function createOrUpdate(array $data): TestimonialHeading
    {
        $testimonial_heading = TestimonialHeading::updateOrCreate(
            ['id' => 1],
            [...$data]
        );

        $testimonial_heading->user_id = auth()->user()->id;
        $testimonial_heading->save();

        return $testimonial_heading;
    }

}
