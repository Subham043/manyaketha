<?php

namespace App\Modules\Main\AboutPage;

use App\Modules\AboutPage\About\Services\AboutService;
use App\Modules\AboutPage\AdditionalContent\Services\AdditionalContentService;
use App\Modules\CallToAction\Services\CallToActionService;
use App\Modules\Feature\Services\FeatureHeadingService;
use App\Modules\Feature\Services\FeatureService;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Partner\Services\PartnerService;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Team\Services\TeamHeadingService;
use App\Modules\Team\Services\TeamService;

class AboutPageController extends BaseController
{
    private PartnerService $partnerService;
    private FeatureService $featureService;
    private FeatureHeadingService $featureHeadingService;
    private AboutService $aboutService;
    private AdditionalContentService $additionalContentService;
    private TeamService $teamService;
    private TeamHeadingService $teamHeadingService;
    private CallToActionService $callToActionService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        PartnerService $partnerService,
        FeatureService $featureService,
        FeatureHeadingService $featureHeadingService,
        AboutService $aboutService,
        AdditionalContentService $additionalContentService,
        TeamService $teamService,
        TeamHeadingService $teamHeadingService,
        Service $service,
        CallToActionService $callToActionService,
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->partnerService = $partnerService;
        $this->featureService = $featureService;
        $this->featureHeadingService = $featureHeadingService;
        $this->aboutService = $aboutService;
        $this->additionalContentService = $additionalContentService;
        $this->teamService = $teamService;
        $this->teamHeadingService = $teamHeadingService;
        $this->callToActionService = $callToActionService;
    }

    public function get(){
        $partner = $this->partnerService->main_all();
        $feature = $this->featureService->main_all();
        $featureHeading = $this->featureHeadingService->getById(1);
        $about = $this->aboutService->getById(1);
        $additionalContent = $this->additionalContentService->main_all();
        $team = $this->teamService->main_all();
        $teamHeading = $this->teamHeadingService->getById(1);
        $callToAction = $this->callToActionService->getById(1);
        return view('main.pages.about', compact([
            'partner',
            'feature',
            'featureHeading',
            'about',
            'additionalContent',
            'team',
            'teamHeading',
            'callToAction',
        ]))->with([
            'legal' => $this->legal_all(),
            'seo' => $this->seo('about-page'),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
    }

}
