<?php

namespace App\Modules\ServicePage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\Services\HeadingService;
use App\Modules\ServicePage\Services\Service;
use Illuminate\Http\Request;

class ServicePaginateController extends Controller
{
    private $service;
    private $headingService;

    public function __construct(Service $service, HeadingService $headingService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->service = $service;
        $this->headingService = $headingService;
    }

    public function get(Request $request){
        $data = $this->service->paginate($request->total ?? 10);
        $serviceHeading = $this->headingService->getById(1);
        return view('admin.pages.service.paginate', compact(['data', 'serviceHeading']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
