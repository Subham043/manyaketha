<?php

namespace App\Modules\Main\LegalPage;

use App\Http\Controllers\Controller;
use App\Modules\Legal\Services\LegalService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;

class LegalPageController extends Controller
{
    private GeneralService $generalService;
    private ThemeService $themeService;
    private ChatbotService $chatbotService;
    private LegalService $legalService;
    private Service $service;

    public function __construct(
        GeneralService $generalService,
        ThemeService $themeService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
    )
    {
        $this->generalService = $generalService;
        $this->themeService = $themeService;
        $this->chatbotService = $chatbotService;
        $this->legalService = $legalService;
        $this->service = $service;
    }

    public function get($legal_slug){
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        $legal = $this->legalService->main_all();
        $serviceOption = $this->service->main_all();
        $data = $this->legalService->getBySlugMain($legal_slug);
        return view('main.pages.legal', compact([
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'data',
            'legal',
            'serviceOption',
        ]));
    }

}
