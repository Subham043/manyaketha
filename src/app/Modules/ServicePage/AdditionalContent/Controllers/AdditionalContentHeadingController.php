<?php

namespace App\Modules\ServicePage\AdditionalContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalContent\Requests\AdditionalContentHeadingRequest;
use App\Modules\ServicePage\AdditionalContent\Services\AdditionalContentHeadingService;

class AdditionalContentHeadingController extends Controller
{
    private $addditionalContentHeadingService;

    public function __construct(AdditionalContentHeadingService $addditionalContentHeadingService)
    {
        $this->middleware('permission:list services', ['only' => ['get','post']]);
        $this->addditionalContentHeadingService = $addditionalContentHeadingService;
    }

    public function post(AdditionalContentHeadingRequest $request, $service_id){
        try {
            //code...
            $this->addditionalContentHeadingService->createOrUpdate(
                $request->validated(), $service_id,
            );
            return response()->json(["message" => "Additional content heading updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
