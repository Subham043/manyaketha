<?php

namespace App\Modules\HomePage\AdditionalContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\HomePage\AdditionalContent\Services\AdditionalContentService;
use Illuminate\Http\Request;

class AdditionalContentPaginateController extends Controller
{
    private $additionalContentService;

    public function __construct(AdditionalContentService $additionalContentService)
    {
        $this->middleware('permission:list home page additional content', ['only' => ['get']]);
        $this->additionalContentService = $additionalContentService;
    }

    public function get(Request $request){
        $data = $this->additionalContentService->paginate($request->total ?? 10);
        return view('admin.pages.home_page.additional_content.paginate', compact(['data']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
