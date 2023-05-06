<?php

namespace App\Modules\Main\BaseController;

use App\Http\Controllers\Controller;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Seo\Services\SeoService;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\ServicePage\Services\Service;

class BaseController extends Controller
{
    protected LegalService $legalService;
    protected SeoService $seoService;
    protected GeneralService $generalService;
    protected ChatbotService $chatbotService;
    protected Service $service;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
    )
    {
        $this->seoService = $seoService;
        $this->generalService = $generalService;
        $this->chatbotService = $chatbotService;
        $this->legalService = $legalService;
        $this->service = $service;
    }

    protected function legal_all(){
        return $this->legalService->main_all();
    }

    protected function general_setting(){
        return $this->generalService->getById(1);
    }

    protected function chatbot_setting(){
        return $this->chatbotService->getById(1);
    }

    protected function service_option(){
        return $this->service->main_all();
    }

    protected function seo(String $slug){
        return $this->seoService->getBySlugMain($slug);
    }

}
