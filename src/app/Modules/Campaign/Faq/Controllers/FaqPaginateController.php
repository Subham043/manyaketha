<?php

namespace App\Modules\Campaign\Faq\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Faq\Services\FaqService;
use Illuminate\Http\Request;

class FaqPaginateController extends Controller
{
    private $faqService;

    public function __construct(FaqService $faqService)
    {
        $this->middleware('permission:list campaigns', ['only' => ['get']]);
        $this->faqService = $faqService;
    }

    public function get(Request $request, $campaign_id){
        $data = $this->faqService->paginate($request->total ?? 10, $campaign_id);
        return view('admin.pages.faq.paginate', compact(['data', 'campaign_id']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
