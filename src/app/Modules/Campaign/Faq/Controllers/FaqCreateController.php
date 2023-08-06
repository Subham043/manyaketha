<?php

namespace App\Modules\Campaign\Faq\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Services\Campaign as CampaignService;
use App\Modules\Campaign\Faq\Requests\FaqCreateRequest;
use App\Modules\Campaign\Faq\Services\FaqService;

class FaqCreateController extends Controller
{
    private $campaignService;
    private $faqService;

    public function __construct(FaqService $faqService, CampaignService $campaignService)
    {
        $this->middleware('permission:list campaigns', ['only' => ['get','post']]);
        $this->faqService = $faqService;
        $this->campaignService = $campaignService;
    }

    public function get($campaign_id){
        $this->campaignService->getById($campaign_id);
        return view('admin.pages.faq.create', compact('campaign_id'));
    }

    public function post(FaqCreateRequest $request, $campaign_id){

        $this->campaignService->getById($campaign_id);
        try {
            //code...
            $faq = $this->faqService->create(
                [...$request->except('image'), 'campaign_id' => $campaign_id]
            );
            return response()->json(["message" => "Faq created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
