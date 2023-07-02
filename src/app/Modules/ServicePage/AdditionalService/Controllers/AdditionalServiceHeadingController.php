<?php

namespace App\Modules\ServicePage\AdditionalService\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalService\Requests\AdditionalServiceHeadingRequest;
use App\Modules\ServicePage\AdditionalService\Services\AdditionalServiceHeadingService;

class AdditionalServiceHeadingController extends Controller
{
    private $addditionalServiceHeadingService;

    public function __construct(AdditionalServiceHeadingService $addditionalServiceHeadingService)
    {
        $this->middleware('permission:list services', ['only' => ['get','post']]);
        $this->addditionalServiceHeadingService = $addditionalServiceHeadingService;
    }

    public function post(AdditionalServiceHeadingRequest $request, $service_id){
        try {
            //code...
            $this->addditionalServiceHeadingService->createOrUpdate(
                $request->validated(), $service_id,
            );
            return response()->json(["message" => "Additional service heading updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
