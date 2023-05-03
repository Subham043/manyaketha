<?php

namespace App\Modules\Feature\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Feature\Requests\FeatureHeadingRequest;
use App\Modules\Feature\Services\FeatureHeadingService;

class FeatureHeadingController extends Controller
{
    private $featureHeadingService;

    public function __construct(FeatureHeadingService $featureHeadingService)
    {
        $this->middleware('permission:list features', ['only' => ['post']]);
        $this->featureHeadingService = $featureHeadingService;
    }

    public function post(FeatureHeadingRequest $request){
        try {
            //code...
            $this->featureHeadingService->createOrUpdate(
                $request->validated(),
            );
            return response()->json(["message" => "Feature heading updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
