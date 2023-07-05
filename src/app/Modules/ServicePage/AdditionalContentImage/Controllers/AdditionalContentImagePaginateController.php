<?php

namespace App\Modules\ServicePage\AdditionalContentImage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalContentImage\Services\AdditionalContentImageService;
use Illuminate\Http\Request;

class AdditionalContentImagePaginateController extends Controller
{
    private $additionalContentImageService;

    public function __construct(AdditionalContentImageService $additionalContentImageService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalContentImageService = $additionalContentImageService;
    }

    public function get(Request $request, $service_id, $service_content_id){
        $data = $this->additionalContentImageService->paginate($service_content_id, $request->total ?? 10);
        return view('admin.pages.service.additional_content_image.paginate', compact(['data', 'service_id', 'service_content_id']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
