<?php

namespace App\Modules\Main\ServicePage;

use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;
use App\Modules\Testimonial\Services\TestimonialService;

class ServiceDetailPageController extends BaseController
{
    private Service $service;
    private TestimonialService $testimonialService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ThemeService $themeService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
        TestimonialService $testimonialService,
    )
    {
        parent::__construct($seoService, $generalService, $themeService, $chatbotService, $legalService);
        $this->service = $service;
        $this->testimonialService = $testimonialService;
    }

    public function get($slug){
        $seo = $this->seoService->getBySlugMain('blog-page');
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        $legal = $this->legalService->main_all();
        $testimonial = $this->testimonialService->main_all();
        $data = $this->service->getBySlugMain($slug);
        $serviceOption = $this->service->main_all();
        return view('main.pages.service.detail', compact([
            'seo',
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'legal',
            'serviceOption',
            'testimonial',
            'data',
        ]));
    }

}
