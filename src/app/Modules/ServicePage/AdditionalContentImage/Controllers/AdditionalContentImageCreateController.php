<?php

namespace App\Modules\ServicePage\AdditionalContentImage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalContentImage\Requests\AdditionalContentImageRequest;
use App\Modules\ServicePage\AdditionalContentImage\Services\AdditionalContentImageService;

class AdditionalContentImageCreateController extends Controller
{
    private $additionalContentImageService;

    public function __construct(AdditionalContentImageService $additionalContentImageService)
    {
        $this->middleware('permission:list services', ['only' => ['post']]);
        $this->additionalContentImageService = $additionalContentImageService;
    }

    public function post(AdditionalContentImageRequest $request, $service_id, $service_content_id){

        try {
            //code...
            $additional_content = $this->additionalContentImageService->create(
                [...$request->except('image'), 'service_content_id'=>$service_content_id]
            );
            if($request->image==true && $request->hasFile('image')){
                $this->additionalContentImageService->saveImage($additional_content);
            }
            return response()->json(["message" => "Additional Content Image created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
