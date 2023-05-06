<?php

namespace App\Modules\Main\ProjectPage;

use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;
use App\Modules\ProjectPage\Category\Services\CategoryService;
use App\Modules\ProjectPage\Project\Services\ProjectHeadingService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Seo\Services\SeoService;

class ProjectPageController extends BaseController
{
    private Service $service;
    private CategoryService $categoryService;
    private ProjectHeadingService $projectHeadingService;

    public function __construct(
        GeneralService $generalService,
        ThemeService $themeService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
        CategoryService $categoryService,
        ProjectHeadingService $projectHeadingService,
        SeoService $seoService,
    )
    {
        parent::__construct($seoService, $generalService, $themeService, $chatbotService, $legalService);
        $this->generalService = $generalService;
        $this->themeService = $themeService;
        $this->chatbotService = $chatbotService;
        $this->legalService = $legalService;
        $this->service = $service;
        $this->categoryService = $categoryService;
        $this->projectHeadingService = $projectHeadingService;
    }

    public function get(){
        $seo = $this->seoService->getBySlugMain('project-page');
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        $legal = $this->legalService->main_all();
        $serviceOption = $this->service->main_all();
        $project = $this->categoryService->main_all();
        $projectHeading = $this->projectHeadingService->getById(1);
        return view('main.pages.project', compact([
            'seo',
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'legal',
            'serviceOption',
            'project',
            'projectHeading'
        ]));
    }

}
