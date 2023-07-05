<?php

namespace App\Modules\Main\ServicePage;

use App\Modules\CallToAction\Services\CallToActionService;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Procedure\Services\ProcedureHeadingService;
use App\Modules\Procedure\Services\ProcedureService;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\HeadingService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use Illuminate\Http\Request;

class ServicePageController extends BaseController
{
    private HeadingService $headingService;
    private ProcedureService $procedureService;
    private ProcedureHeadingService $procedureHeadingService;
    private CallToActionService $callToActionService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
        HeadingService $headingService,
        ProcedureService $procedureService,
        ProcedureHeadingService $procedureHeadingService,
        CallToActionService $callToActionService
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->headingService = $headingService;
        $this->procedureService = $procedureService;
        $this->procedureHeadingService = $procedureHeadingService;
        $this->callToActionService = $callToActionService;
    }

    public function get(Request $request){
        $services = $this->service->main_paginate($request->total ?? 10);
        $headingService = $this->headingService->getById(1);
        $procedure = $this->procedureService->main_all();
        $procedureHeading = $this->procedureHeadingService->getById(1);
        $callToAction = $this->callToActionService->getById(1);
        return view('main.pages.service.index', compact([
            'services',
            'headingService',
            'procedure',
            'procedureHeading',
            'callToAction',
        ]))->with([
            'legal' => $this->legal_all(),
            'seo' => $this->seo('service-page'),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
    }

}
