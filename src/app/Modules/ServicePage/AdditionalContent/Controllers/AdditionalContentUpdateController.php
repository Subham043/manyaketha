<?php

namespace App\Modules\ServicePage\AdditionalContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalContent\Requests\AdditionalContentUpdateRequest;
use App\Modules\ServicePage\AdditionalContent\Services\AdditionalContentService;

class AdditionalContentUpdateController extends Controller
{
    private $additionalContentService;

    public function __construct(AdditionalContentService $additionalContentService)
    {
        $this->middleware('permission:list services', ['only' => ['get','post']]);
        $this->additionalContentService = $additionalContentService;
    }

    public function get($service_id, $id){
        $data = $this->additionalContentService->getById($service_id, $id);
        return view('admin.pages.service.additional_content.update', compact(['data', 'service_id']));
    }

    public function post(AdditionalContentUpdateRequest $request, $service_id, $id){
        $additional_content = $this->additionalContentService->getById($service_id, $id);
        try {
            //code...
            $this->additionalContentService->update(
                $request->except('image'),
                $additional_content
            );
            if($request->hasFile('image')){
                $this->additionalContentService->saveImage($additional_content);
            }
            return response()->json(["message" => "Additional Content updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
