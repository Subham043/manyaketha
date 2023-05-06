<?php

namespace App\Modules\Main\ServicePage;

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

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
        TestimonialService $testimonialService,
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->testimonialService = $testimonialService;
    }

    public function get($slug){
        $testimonial = $this->testimonialService->main_all();
        $data = $this->service->getBySlugMain($slug);
        return view('main.pages.service.detail', compact([
            'testimonial',
            'data',
        ]))->with([
            'legal' => $this->legal_all(),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
    }

}
