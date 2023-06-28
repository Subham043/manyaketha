<?php

namespace App\Modules\ServicePage\AdditionalService\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalService\Requests\AdditionalServiceCreateRequest;
use App\Modules\ServicePage\AdditionalService\Services\AdditionalServiceService;

class AdditionalServiceCreateController extends Controller
{
    private $additionalServiceService;

    public function __construct(AdditionalServiceService $additionalServiceService)
    {
        $this->middleware('permission:list services', ['only' => ['get','post']]);
        $this->additionalServiceService = $additionalServiceService;
    }

    public function get($service_id){
        return view('admin.pages.service.additional_service.create', compact('service_id'));
    }

    public function post(AdditionalServiceCreateRequest $request, $service_id){

        try {
            //code...
            $additional_service = $this->additionalServiceService->create(
                [...$request->except('image'), 'service_id'=>$service_id]
            );
            if($request->image==true && $request->hasFile('image')){
                $this->additionalServiceService->saveImage($additional_service);
            }
            return response()->json(["message" => "Additional Service created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
