<?php

namespace App\Modules\Campaign\Gallery\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Gallery\Services\GalleryService;

class GalleryDeleteController extends Controller
{
    private $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->middleware('permission:list campaigns', ['only' => ['get']]);
        $this->galleryService = $galleryService;
    }

    public function get($campaign_id, $id){
        $gallery = $this->galleryService->getByIdAndCampaignId($campaign_id, $id);

        try {
            //code...
            $this->galleryService->delete(
                $gallery
            );
            return redirect()->back()->with('success_status', 'Gallery Image deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
