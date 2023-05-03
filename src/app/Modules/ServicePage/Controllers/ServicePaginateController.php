<?php

namespace App\Modules\ServicePage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\Services\Service;
use Illuminate\Http\Request;

class ServicePaginateController extends Controller
{
    private $service;

    public function __construct(Service $service)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->service = $service;
    }

    public function get(Request $request){
        $data = $this->service->paginate($request->total ?? 10);
        return view('admin.pages.service.paginate', compact(['data']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
