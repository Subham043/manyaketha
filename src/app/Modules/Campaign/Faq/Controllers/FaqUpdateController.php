<?php

namespace App\Modules\Campaign\Faq\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Faq\Requests\FaqUpdateRequest;
use App\Modules\Campaign\Faq\Services\FaqService;

class FaqUpdateController extends Controller
{
    private $faqService;

    public function __construct(FaqService $faqService)
    {
        $this->middleware('permission:edit campaigns', ['only' => ['get','post']]);
        $this->faqService = $faqService;
    }

    public function get($campaign_id, $id){
        $data = $this->faqService->getByIdAndCampaignId($campaign_id, $id);
        return view('admin.pages.faq.update', compact(['data', 'campaign_id']));
    }

    public function post(FaqUpdateRequest $request, $campaign_id, $id){
        $faq = $this->faqService->getByIdAndCampaignId($campaign_id, $id);
        try {
            //code...
            $this->faqService->update(
                $request->except('image'),
                $faq
            );
            return response()->json(["message" => "Faq updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
