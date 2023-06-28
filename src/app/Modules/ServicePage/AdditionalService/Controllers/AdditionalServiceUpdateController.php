<?php

namespace App\Modules\ServicePage\AdditionalService\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalService\Requests\AdditionalServiceUpdateRequest;
use App\Modules\ServicePage\AdditionalService\Services\AdditionalServiceService;

class AdditionalServiceUpdateController extends Controller
{
    private $additionalServiceService;

    public function __construct(AdditionalServiceService $additionalServiceService)
    {
        $this->middleware('permission:list services', ['only' => ['get','post']]);
        $this->additionalServiceService = $additionalServiceService;
    }

    public function get($service_id, $id){
        $data = $this->additionalServiceService->getById($service_id, $id);
        return view('admin.pages.service.additional_service.update', compact(['data', 'service_id']));
    }

    public function post(AdditionalServiceUpdateRequest $request, $service_id, $id){
        $additional_service = $this->additionalServiceService->getById($service_id, $id);
        try {
            //code...
            $this->additionalServiceService->update(
                $request->except('image'),
                $additional_service
            );
            if($request->hasFile('image')){
                $this->additionalServiceService->saveImage($additional_service);
            }
            return response()->json(["message" => "Additional Content updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
