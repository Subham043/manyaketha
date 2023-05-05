<?php

namespace App\Modules\Main\AboutPage;

use App\Modules\AboutPage\About\Services\AboutService;
use App\Modules\AboutPage\AdditionalContent\Services\AdditionalContentService;
use App\Modules\Feature\Services\FeatureHeadingService;
use App\Modules\Feature\Services\FeatureService;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Partner\Services\PartnerService;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;
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
    private Service $service;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ThemeService $themeService,
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
    )
    {
        parent::__construct($seoService, $generalService, $themeService, $chatbotService, $legalService);
        $this->partnerService = $partnerService;
        $this->featureService = $featureService;
        $this->featureHeadingService = $featureHeadingService;
        $this->aboutService = $aboutService;
        $this->additionalContentService = $additionalContentService;
        $this->teamService = $teamService;
        $this->teamHeadingService = $teamHeadingService;
        $this->service = $service;
    }

    public function get(){
        $legal = $this->legalService->main_all();
        $seo = $this->seoService->getBySlugMain('about-page');
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        $partner = $this->partnerService->main_all();
        $feature = $this->featureService->main_all();
        $featureHeading = $this->featureHeadingService->getById(1);
        $about = $this->aboutService->getById(1);
        $additionalContent = $this->additionalContentService->main_all();
        $team = $this->teamService->main_all();
        $teamHeading = $this->teamHeadingService->getById(1);
        $serviceOption = $this->service->main_all();
        return view('main.pages.about', compact([
            'seo',
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'legal',
            'partner',
            'feature',
            'featureHeading',
            'about',
            'additionalContent',
            'team',
            'teamHeading',
            'serviceOption',
        ]));
    }

}
