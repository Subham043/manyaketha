<?php

namespace App\Modules\Campaign\Gallery\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Gallery\Services\GalleryService;
use Illuminate\Http\Request;

class GalleryPaginateController extends Controller
{
    private $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->middleware('permission:list campaigns', ['only' => ['get']]);
        $this->galleryService = $galleryService;
    }

    public function get(Request $request, $campaign_id){
        $data = $this->galleryService->paginate($request->total ?? 10, $campaign_id);
        return view('admin.pages.gallery.paginate', compact(['data', 'campaign_id']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
