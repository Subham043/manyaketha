<?php

namespace App\Modules\ServicePage\AdditionalService\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalService\Services\AdditionalServiceHeadingService;
use App\Modules\ServicePage\AdditionalService\Services\AdditionalServiceService;
use Illuminate\Http\Request;

class AdditionalServicePaginateController extends Controller
{
    private $additionalServiceService;
    private $additionalServiceHeadingService;

    public function __construct(AdditionalServiceService $additionalServiceService, AdditionalServiceHeadingService $additionalServiceHeadingService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalServiceService = $additionalServiceService;
        $this->additionalServiceHeadingService = $additionalServiceHeadingService;
    }

    public function get(Request $request, $service_id){
        $additionalServiceHeading = $this->additionalServiceHeadingService->getByServiceId($service_id);
        $data = $this->additionalServiceService->paginate($service_id, $request->total ?? 10);
        return view('admin.pages.service.additional_service.paginate', compact(['data', 'additionalServiceHeading', 'service_id']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
