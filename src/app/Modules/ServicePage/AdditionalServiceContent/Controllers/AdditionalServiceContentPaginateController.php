<?php

namespace App\Modules\ServicePage\AdditionalServiceContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalServiceContent\Services\AdditionalServiceContentService;
use Illuminate\Http\Request;

class AdditionalServiceContentPaginateController extends Controller
{
    private $additionalContentService;

    public function __construct(AdditionalServiceContentService $additionalContentService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalContentService = $additionalContentService;
    }

    public function get(Request $request, $service_id, $additional_service_id){
        $data = $this->additionalContentService->paginate($additional_service_id, $request->total ?? 10);
        return view('admin.pages.service.additional_service_content.paginate', compact(['data', 'service_id', 'additional_service_id']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
