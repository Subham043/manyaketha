<?php

namespace App\Modules\AboutPage\AdditionalContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\AboutPage\AdditionalContent\Requests\AdditionalContentUpdateRequest;
use App\Modules\AboutPage\AdditionalContent\Services\AdditionalContentService;

class AdditionalContentUpdateController extends Controller
{
    private $additionalContentService;

    public function __construct(AdditionalContentService $additionalContentService)
    {
        $this->middleware('permission:edit about page additional content', ['only' => ['get','post']]);
        $this->additionalContentService = $additionalContentService;
    }

    public function get($id){
        $data = $this->additionalContentService->getById($id);
        return view('admin.pages.about_page.additional_content.update', compact('data'));
    }

    public function post(AdditionalContentUpdateRequest $request, $id){
        $additional_content = $this->additionalContentService->getById($id);
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
