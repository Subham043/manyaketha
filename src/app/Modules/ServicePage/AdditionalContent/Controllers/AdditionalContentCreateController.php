<?php

namespace App\Modules\ServicePage\AdditionalContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalContent\Requests\AdditionalContentCreateRequest;
use App\Modules\ServicePage\AdditionalContent\Services\AdditionalContentService;

class AdditionalContentCreateController extends Controller
{
    private $additionalContentService;

    public function __construct(AdditionalContentService $additionalContentService)
    {
        $this->middleware('permission:list services', ['only' => ['get','post']]);
        $this->additionalContentService = $additionalContentService;
    }

    public function get($service_id){
        return view('admin.pages.service.additional_content.create', compact('service_id'));
    }

    public function post(AdditionalContentCreateRequest $request, $service_id){

        try {
            //code...
            $additional_content = $this->additionalContentService->create(
                [...$request->except('image'), 'service_id'=>$service_id]
            );
            if($request->image==true && $request->hasFile('image')){
                $this->additionalContentService->saveImage($additional_content);
            }
            return response()->json(["message" => "Additional Content created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
