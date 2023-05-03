<?php

namespace App\Modules\ServicePage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\Requests\ServiceHeadingRequest;
use App\Modules\ServicePage\Services\HeadingService;

class ServiceHeadingController extends Controller
{
    private $serviceHeadingService;

    public function __construct(HeadingService $serviceHeadingService)
    {
        $this->middleware('permission:list services', ['only' => ['post']]);
        $this->serviceHeadingService = $serviceHeadingService;
    }

    public function post(ServiceHeadingRequest $request){
        try {
            //code...
            $this->serviceHeadingService->createOrUpdate(
                $request->validated(),
            );
            return response()->json(["message" => "Service heading updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
