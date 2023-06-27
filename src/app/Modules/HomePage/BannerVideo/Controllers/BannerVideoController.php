<?php

namespace App\Modules\HomePage\BannerVideo\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\HomePage\BannerVideo\Requests\BannerVideoRequest;
use App\Modules\HomePage\BannerVideo\Services\BannerVideoService;

class BannerVideoController extends Controller
{
    private $bannerVideoService;

    public function __construct(BannerVideoService $bannerVideoService)
    {
        $this->bannerVideoService = $bannerVideoService;
    }

    public function get(){
        $data = $this->bannerVideoService->getById(1);
        return view('admin.pages.home_page.banner_video', compact('data'));
    }

    public function post(BannerVideoRequest $request){
        try {
            //code...
            $main = $this->bannerVideoService->createOrUpdate(
                $request->validated(),
            );
            return response()->json(["message" => "Banner Video updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
