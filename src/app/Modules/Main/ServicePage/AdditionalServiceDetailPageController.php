<?php

namespace App\Modules\Main\ServicePage;

use App\Modules\CallToAction\Services\CallToActionService;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\AdditionalService\Services\AdditionalServiceService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Testimonial\Services\TestimonialService;

class AdditionalServiceDetailPageController extends BaseController
{
    private TestimonialService $testimonialService;
    private AdditionalServiceService $additionalService;
    private CallToActionService $callToActionService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
        AdditionalServiceService $additionalService,
        TestimonialService $testimonialService,
        CallToActionService $callToActionService
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->testimonialService = $testimonialService;
        $this->additionalService = $additionalService;
        $this->callToActionService = $callToActionService;
    }

    public function get($service_slug, $slug){
        $testimonial = $this->testimonialService->main_all();
        $data = $this->additionalService->getBySlugMain($service_slug, $slug);
        $callToAction = $this->callToActionService->getById(1);
        return view('main.pages.service.additional_detail', compact([
            'testimonial',
            'data',
            'callToAction',
        ]))->with([
            'legal' => $this->legal_all(),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
    }

}
