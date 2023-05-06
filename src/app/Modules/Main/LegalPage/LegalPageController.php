<?php

namespace App\Modules\Main\LegalPage;

use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;

class LegalPageController extends BaseController
{

    public function __construct(
        GeneralService $generalService,
        SeoService $seoService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
    }

    public function get($legal_slug){
        $data = $this->legalService->getBySlugMain($legal_slug);
        return view('main.pages.legal', compact([
            'data',
        ]))->with([
            'legal' => $this->legal_all(),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
    }

}
