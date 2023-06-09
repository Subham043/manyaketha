<?php

namespace App\Modules\Testimonial\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Testimonial\Requests\TestimonialHeadingRequest;
use App\Modules\Testimonial\Services\TestimonialHeadingService;

class TestimonialHeadingController extends Controller
{
    private $testimonialHeadingService;

    public function __construct(TestimonialHeadingService $testimonialHeadingService)
    {
        $this->middleware('permission:list testimonials', ['only' => ['post']]);
        $this->testimonialHeadingService = $testimonialHeadingService;
    }

    public function post(TestimonialHeadingRequest $request){
        try {
            //code...
            $this->testimonialHeadingService->createOrUpdate(
                $request->validated(),
            );
            return response()->json(["message" => "Testimonial heading updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
