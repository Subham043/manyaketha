<?php

namespace App\Modules\Testimonial\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Testimonial\Services\TestimonialHeadingService;
use App\Modules\Testimonial\Services\TestimonialService;
use Illuminate\Http\Request;

class TestimonialPaginateController extends Controller
{
    private $testimonialService;
    private $testimonialHeadingService;

    public function __construct(TestimonialService $testimonialService, TestimonialHeadingService $testimonialHeadingService)
    {
        $this->middleware('permission:list testimonials', ['only' => ['get']]);
        $this->testimonialService = $testimonialService;
        $this->testimonialHeadingService = $testimonialHeadingService;
    }

    public function get(Request $request){
        $testimonialHeading = $this->testimonialHeadingService->getById(1);
        $data = $this->testimonialService->paginate($request->total ?? 10);
        return view('admin.pages.testimonial.paginate', compact(['data', 'testimonialHeading']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
