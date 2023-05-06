<?php

namespace App\Modules\Main\ProjectPage;

use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\ProjectPage\Category\Services\CategoryService;
use App\Modules\ProjectPage\Project\Services\ProjectHeadingService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Seo\Services\SeoService;

class ProjectPageController extends BaseController
{
    private CategoryService $categoryService;
    private ProjectHeadingService $projectHeadingService;

    public function __construct(
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        Service $service,
        CategoryService $categoryService,
        SeoService $seoService,
        ProjectHeadingService $projectHeadingService,
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->categoryService = $categoryService;
        $this->projectHeadingService = $projectHeadingService;
    }

    public function get(){
        $project = $this->categoryService->main_all();
        $projectHeading = $this->projectHeadingService->getById(1);
        return view('main.pages.project', compact([
            'project',
            'projectHeading'
        ]))->with([
            'legal' => $this->legal_all(),
            'seo' => $this->seo('project-page'),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
    }

}
