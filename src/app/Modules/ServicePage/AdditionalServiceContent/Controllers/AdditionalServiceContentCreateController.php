<?php

namespace App\Modules\ServicePage\AdditionalServiceContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalServiceContent\Requests\AdditionalServiceContentCreateRequest;
use App\Modules\ServicePage\AdditionalServiceContent\Services\AdditionalServiceContentService;

class AdditionalServiceContentCreateController extends Controller
{
    private $additionalServiceContentService;

    public function __construct(AdditionalServiceContentService $additionalServiceContentService)
    {
        $this->middleware('permission:list services', ['only' => ['get','post']]);
        $this->additionalServiceContentService = $additionalServiceContentService;
    }

    public function get($service_id, $additional_service_id){
        return view('admin.pages.service.additional_service_content.create', compact(['service_id', 'additional_service_id']));
    }

    public function post(AdditionalServiceContentCreateRequest $request, $service_id, $additional_service_id){

        try {
            //code...
            $additional_content = $this->additionalServiceContentService->create(
                [...$request->except('image'), 'additional_service_id'=>$additional_service_id]
            );
            if($request->image==true && $request->hasFile('image')){
                $this->additionalServiceContentService->saveImage($additional_content);
            }
            return response()->json(["message" => "Additional Service Content created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
