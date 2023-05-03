<?php

namespace App\Modules\Main\ServicePage;

use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Procedure\Services\ProcedureHeadingService;
use App\Modules\Procedure\Services\ProcedureService;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\HeadingService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;
use Illuminate\Http\Request;

class ServicePageController extends BaseController
{
    private Service $service;
    private HeadingService $headingService;
    private ProcedureService $procedureService;
    private ProcedureHeadingService $procedureHeadingService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ThemeService $themeService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
        HeadingService $headingService,
        ProcedureService $procedureService,
        ProcedureHeadingService $procedureHeadingService,
    )
    {
        parent::__construct($seoService, $generalService, $themeService, $chatbotService, $legalService);
        $this->service = $service;
        $this->headingService = $headingService;
        $this->procedureService = $procedureService;
        $this->procedureHeadingService = $procedureHeadingService;
    }

    public function get(Request $request){
        $seo = $this->seoService->getBySlugMain('blog-page');
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        $legal = $this->legalService->main_all();
        $service = $this->service->main_paginate($request->total ?? 10);
        $headingService = $this->headingService->getById(1);
        $procedure = $this->procedureService->main_all();
        $procedureHeading = $this->procedureHeadingService->getById(1);
        return view('main.pages.service.index', compact([
            'seo',
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'legal',
            'service',
            'headingService',
            'procedure',
            'procedureHeading',
        ]));
    }

}
