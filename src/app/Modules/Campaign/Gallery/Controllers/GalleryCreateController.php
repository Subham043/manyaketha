<?php

namespace App\Modules\Campaign\Gallery\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Services\Campaign as CampaignService;
use App\Modules\Campaign\Gallery\Requests\GalleryCreateRequest;
use App\Modules\Campaign\Gallery\Services\GalleryService;

class GalleryCreateController extends Controller
{
    private $campaignService;
    private $galleryService;

    public function __construct(GalleryService $galleryService, CampaignService $campaignService)
    {
        $this->middleware('permission:list campaigns', ['only' => ['get','post']]);
        $this->galleryService = $galleryService;
        $this->campaignService = $campaignService;
    }

    public function get($campaign_id){
        $this->campaignService->getById($campaign_id);
        return view('admin.pages.gallery.create', compact('campaign_id'));
    }

    public function post(GalleryCreateRequest $request, $campaign_id){

        $this->campaignService->getById($campaign_id);
        try {
            //code...
            $gallery = $this->galleryService->create(
                [...$request->except('image'), 'campaign_id' => $campaign_id]
            );
            if($request->hasFile('image')){
                $this->galleryService->saveImage($gallery);
            }
            return response()->json(["message" => "Gallery created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
