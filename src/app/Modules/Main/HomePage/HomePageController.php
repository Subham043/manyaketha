<?php

namespace App\Modules\Main\HomePage;

use App\Modules\Blog\Services\BlogHeadingService;
use App\Modules\Blog\Services\BlogService;
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
use App\Modules\ProjectPage\Category\Services\CategoryService;
use App\Modules\ProjectPage\Project\Services\ProjectHeadingService;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\HeadingService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
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
    private BlogService $blogService;
    private BlogHeadingService $blogHeadingService;
    private CategoryService $projectService;
    private ProjectHeadingService $projectHeadingService;
    private HeadingService $headingService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
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
        BlogService $blogService,
        BlogHeadingService $blogHeadingService,
        CategoryService $projectService,
        ProjectHeadingService $projectHeadingService,
        HeadingService $headingService,
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
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
        $this->blogService = $blogService;
        $this->blogHeadingService = $blogHeadingService;
        $this->projectService = $projectService;
        $this->projectHeadingService = $projectHeadingService;
        $this->headingService = $headingService;
    }

    public function get(){
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
        $blog = $this->blogService->main_latest_six();
        $blogHeading = $this->blogHeadingService->getById(1);
        $project = $this->projectService->main_latest_four();
        $projectHeading = $this->projectHeadingService->getById(1);
        $services = $this->service->main_latest_six();
        $headingService = $this->headingService->getById(1);
        $about = $this->aboutService->getById(1);
        return view('main.pages.index', compact([
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
            'blog',
            'blogHeading',
            'project',
            'projectHeading',
            'services',
            'headingService',
        ]))->with([
            'legal' => $this->legal_all(),
            'seo' => $this->seo('home-page'),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
    }

}
