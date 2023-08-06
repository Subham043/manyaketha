<?php

namespace App\Modules\Main\CampaignPage;

use App\Http\Services\RateLimitService;
use App\Modules\Blog\Services\BlogService;
use App\Modules\Campaign\Services\Campaign;
use App\Modules\Enquiry\CampaignForm\Requests\CampaignFormRequest;
use App\Modules\Enquiry\CampaignForm\Services\CampaignFormService;
use App\Modules\Feature\Services\FeatureService;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Procedure\Services\ProcedureService;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Testimonial\Services\TestimonialService;

class CampaignPageController  extends BaseController
{
    private Campaign $campaignService;
    private TestimonialService $testimonialService;
    private FeatureService $featureService;
    private ProcedureService $procedureService;
    private CampaignFormService $campaignFormService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
        Campaign $campaignService,
        TestimonialService $testimonialService,
        FeatureService $featureService,
        ProcedureService $procedureService,
        CampaignFormService $campaignFormService,
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->campaignService = $campaignService;
        $this->testimonialService = $testimonialService;
        $this->featureService = $featureService;
        $this->procedureService = $procedureService;
        $this->campaignFormService = $campaignFormService;
    }

    public function get($slug){
        $data = $this->campaignService->getBySlugMain($slug);
        $services = $this->service->main_latest_six();
        $testimonial = $this->testimonialService->main_all();
        $feature = $this->featureService->main_all();
        $procedure = $this->procedureService->main_all();
        return view('main.pages.campaign', compact('data'))->with([
            'services' => $services,
            'testimonial' => $testimonial,
            'feature' => $feature,
            'procedure' => $procedure,
            'legal' => $this->legal_all(),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);;
    }

    public function post(CampaignFormRequest $request){

        try {
            //code...
            $campaignForm = $this->campaignFormService->create(
                $request->safe()->except('image')
            );
            if($request->hasFile('image')){
                $this->campaignFormService->saveImage($campaignForm);
            }
            (new RateLimitService($request))->clearRateLimit();
            return response()->json(["message" => "Enquiry recieved successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }

}
