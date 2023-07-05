<?php

namespace App\Modules\ServicePage\AdditionalServiceContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalServiceContent\Requests\AdditionalServiceContentUpdateRequest;
use App\Modules\ServicePage\AdditionalServiceContent\Services\AdditionalServiceContentService;

class AdditionalServiceContentUpdateController extends Controller
{
    private $additionalServiceContentService;

    public function __construct(AdditionalServiceContentService $additionalServiceContentService)
    {
        $this->middleware('permission:list services', ['only' => ['get','post']]);
        $this->additionalServiceContentService = $additionalServiceContentService;
    }

    public function get($service_id, $additional_service_id, $id){
        $data = $this->additionalServiceContentService->getById($additional_service_id, $id);
        return view('admin.pages.service.additional_service_content.update', compact(['data', 'service_id', 'additional_service_id']));
    }

    public function post(AdditionalServiceContentUpdateRequest $request, $service_id, $additional_service_id, $id){
        $additional_content = $this->additionalServiceContentService->getById($additional_service_id, $id);
        try {
            //code...
            $this->additionalServiceContentService->update(
                $request->except('image'),
                $additional_content
            );
            if($request->hasFile('image')){
                $this->additionalServiceContentService->saveImage($additional_content);
            }
            return response()->json(["message" => "Additional Service Content updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
