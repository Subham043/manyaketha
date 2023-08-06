<?php

namespace App\Modules\Campaign\Gallery\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Gallery\Requests\GalleryUpdateRequest;
use App\Modules\Campaign\Gallery\Services\GalleryService;

class GalleryUpdateController extends Controller
{
    private $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->middleware('permission:edit campaigns', ['only' => ['get','post']]);
        $this->galleryService = $galleryService;
    }

    public function get($campaign_id, $id){
        $data = $this->galleryService->getByIdAndCampaignId($campaign_id, $id);
        return view('admin.pages.gallery.update', compact(['data', 'campaign_id']));
    }

    public function post(GalleryUpdateRequest $request, $campaign_id, $id){
        $gallery = $this->galleryService->getByIdAndCampaignId($campaign_id, $id);
        try {
            //code...
            $this->galleryService->update(
                $request->except('image'),
                $gallery
            );
            if($request->hasFile('image')){
                $this->galleryService->saveImage($gallery);
            }
            return response()->json(["message" => "Gallery Image updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
