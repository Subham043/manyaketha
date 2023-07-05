<?php

namespace App\Modules\ServicePage\AdditionalServiceContentImage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalServiceContentImage\Requests\AdditionalServiceContentImageRequest;
use App\Modules\ServicePage\AdditionalServiceContentImage\Services\AdditionalServiceContentImageService;

class AdditionalServiceContentImageCreateController extends Controller
{
    private $additionalContentImageService;

    public function __construct(AdditionalServiceContentImageService $additionalContentImageService)
    {
        $this->middleware('permission:list services', ['only' => ['post']]);
        $this->additionalContentImageService = $additionalContentImageService;
    }

    public function post(AdditionalServiceContentImageRequest $request, $service_id, $additional_service_id, $additional_service_content_id){

        try {
            //code...
            $additional_content = $this->additionalContentImageService->create(
                [...$request->except('image'), 'content_id'=>$additional_service_content_id]
            );
            if($request->image==true && $request->hasFile('image')){
                $this->additionalContentImageService->saveImage($additional_content);
            }
            return response()->json(["message" => "Additional Service Content Image created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
