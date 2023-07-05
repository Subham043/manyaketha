<?php

namespace App\Modules\Main\ServicePage;

use App\Modules\CallToAction\Services\CallToActionService;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Testimonial\Services\TestimonialService;

class ServiceDetailPageController extends BaseController
{
    private TestimonialService $testimonialService;
    private CallToActionService $callToActionService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
        TestimonialService $testimonialService,
        CallToActionService $callToActionService
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->testimonialService = $testimonialService;
        $this->callToActionService = $callToActionService;
    }

    public function get($slug){
        $testimonial = $this->testimonialService->main_all();
        $data = $this->service->getBySlugMain($slug);
        $callToAction = $this->callToActionService->getById(1);
        return view('main.pages.service.detail', compact([
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
