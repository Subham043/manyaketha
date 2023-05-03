<?php

namespace App\Modules\Main\HomePage;

use App\Modules\Counter\Services\CounterService;
use App\Modules\Feature\Services\FeatureService;
use App\Modules\HomePage\About\Services\AboutService;
use App\Modules\HomePage\AdditionalContent\Services\AdditionalContentService;
use App\Modules\HomePage\Banner\Services\BannerService;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Partner\Services\PartnerService;
use App\Modules\Procedure\Services\ProcedureHeadingService;
use App\Modules\Procedure\Services\ProcedureService;
use App\Modules\Seo\Services\SeoService;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;
use App\Modules\Team\Services\TeamHeadingService;
use App\Modules\Team\Services\TeamService;
use App\Modules\Testimonial\Services\TestimonialHeadingService;
use App\Modules\Testimonial\Services\TestimonialService;

class HomePageController extends BaseController
{
    private PartnerService $partnerService;
    private FeatureService $featureService;
    private CounterService $counterService;
    private BannerService $bannerService;
    private AboutService $aboutService;
    private AdditionalContentService $additionalContentService;
    private ProcedureService $procedureService;
    private ProcedureHeadingService $procedureHeadingService;
    private TestimonialService $testimonialService;
    private TestimonialHeadingService $testimonialHeadingService;
    private TeamService $teamService;
    private TeamHeadingService $teamHeadingService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ThemeService $themeService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        PartnerService $partnerService,
        FeatureService $featureService,
        CounterService $counterService,
        BannerService $bannerService,
        AboutService $aboutService,
        AdditionalContentService $additionalContentService,
        ProcedureService $procedureService,
        ProcedureHeadingService $procedureHeadingService,
        TestimonialService $testimonialService,
        TestimonialHeadingService $testimonialHeadingService,
        TeamService $teamService,
        TeamHeadingService $teamHeadingService,
    )
    {
        parent::__construct($seoService, $generalService, $themeService, $chatbotService, $legalService);
        $this->partnerService = $partnerService;
        $this->featureService = $featureService;
        $this->counterService = $counterService;
        $this->bannerService = $bannerService;
        $this->aboutService = $aboutService;
        $this->additionalContentService = $additionalContentService;
        $this->procedureService = $procedureService;
        $this->procedureHeadingService = $procedureHeadingService;
        $this->testimonialService = $testimonialService;
        $this->testimonialHeadingService = $testimonialHeadingService;
        $this->teamService = $teamService;
        $this->teamHeadingService = $teamHeadingService;
    }

    public function get(){
        $legal = $this->legalService->main_all();
        $seo = $this->seoService->getBySlugMain('home-page');
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        $partner = $this->partnerService->main_all();
        $feature = $this->featureService->main_all();
        $counter = $this->counterService->main_all();
        $banner = $this->bannerService->main_all();
        $additionalContent = $this->additionalContentService->main_all();
        $procedure = $this->procedureService->main_all();
        $procedureHeading = $this->procedureHeadingService->getById(1);
        $testimonial = $this->testimonialService->main_all();
        $testimonialHeading = $this->testimonialHeadingService->getById(1);
        $team = $this->teamService->main_all();
        $teamHeading = $this->teamHeadingService->getById(1);
        $about = $this->aboutService->getById(1);
        return view('main.pages.index', compact([
            'legal',
            'seo',
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'partner',
            'feature',
            'counter',
            'banner',
            'about',
            'additionalContent',
            'procedure',
            'procedureHeading',
            'testimonial',
            'testimonialHeading',
            'team',
            'teamHeading',
        ]));
    }

}
