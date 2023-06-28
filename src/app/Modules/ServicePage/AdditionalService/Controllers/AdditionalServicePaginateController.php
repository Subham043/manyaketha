<?php

namespace App\Modules\ServicePage\AdditionalService\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalService\Services\AdditionalServiceService;
use Illuminate\Http\Request;

class AdditionalServicePaginateController extends Controller
{
    private $additionalServiceService;

    public function __construct(AdditionalServiceService $additionalServiceService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalServiceService = $additionalServiceService;
    }

    public function get(Request $request, $service_id){
        $data = $this->additionalServiceService->paginate($service_id, $request->total ?? 10);
        return view('admin.pages.service.additional_service.paginate', compact(['data', 'service_id']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
