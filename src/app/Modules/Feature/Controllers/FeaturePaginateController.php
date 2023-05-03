<?php

namespace App\Modules\Feature\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Feature\Services\FeatureHeadingService;
use App\Modules\Feature\Services\FeatureService;
use Illuminate\Http\Request;

class FeaturePaginateController extends Controller
{
    private $featureService;
    private $featureHeadingService;

    public function __construct(FeatureService $featureService, FeatureHeadingService $featureHeadingService)
    {
        $this->middleware('permission:list features', ['only' => ['get']]);
        $this->featureService = $featureService;
        $this->featureHeadingService = $featureHeadingService;
    }

    public function get(Request $request){
        $featureHeading = $this->featureHeadingService->getById(1);
        $data = $this->featureService->paginate($request->total ?? 10);
        return view('admin.pages.feature.paginate', compact(['data', 'featureHeading']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
