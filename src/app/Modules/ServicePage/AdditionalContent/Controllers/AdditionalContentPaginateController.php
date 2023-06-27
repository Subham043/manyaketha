<?php

namespace App\Modules\ServicePage\AdditionalContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalContent\Services\AdditionalContentService;
use Illuminate\Http\Request;

class AdditionalContentPaginateController extends Controller
{
    private $additionalContentService;

    public function __construct(AdditionalContentService $additionalContentService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalContentService = $additionalContentService;
    }

    public function get(Request $request, $service_id){
        $data = $this->additionalContentService->paginate($service_id, $request->total ?? 10);
        return view('admin.pages.service.additional_content.paginate', compact(['data', 'service_id']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
