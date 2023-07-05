<?php

namespace App\Modules\ServicePage\AdditionalServiceContentImage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalServiceContentImage\Services\AdditionalServiceContentImageService;
use Illuminate\Http\Request;

class AdditionalServiceContentImagePaginateController extends Controller
{
    private $additionalContentImageService;

    public function __construct(AdditionalServiceContentImageService $additionalContentImageService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalContentImageService = $additionalContentImageService;
    }

    public function get(Request $request, $service_id, $additional_service_id, $additional_service_content_id){
        $data = $this->additionalContentImageService->paginate($additional_service_content_id, $request->total ?? 10);
        return view('admin.pages.service.additional_service_content_image.paginate', compact(['data', 'service_id', 'additional_service_id', 'additional_service_content_id']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
