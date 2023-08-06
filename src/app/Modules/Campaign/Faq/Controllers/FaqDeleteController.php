<?php

namespace App\Modules\Campaign\Faq\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Faq\Services\FaqService;

class FaqDeleteController extends Controller
{
    private $faqService;

    public function __construct(FaqService $faqService)
    {
        $this->middleware('permission:list campaigns', ['only' => ['get']]);
        $this->faqService = $faqService;
    }

    public function get($campaign_id, $id){
        $faq = $this->faqService->getByIdAndCampaignId($campaign_id, $id);

        try {
            //code...
            $this->faqService->delete(
                $faq
            );
            return redirect()->back()->with('success_status', 'Faq Image deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
