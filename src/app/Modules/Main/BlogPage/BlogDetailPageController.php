<?php

namespace App\Modules\Main\BlogPage;

use App\Modules\Legal\Services\LegalService;
use App\Modules\Blog\Services\BlogService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;

class BlogDetailPageController extends BaseController
{
    private $blogService;
    private Service $service;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ThemeService $themeService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        BlogService $blogService,
        Service $service,
    )
    {
        parent::__construct($seoService, $generalService, $themeService, $chatbotService, $legalService);
        $this->blogService = $blogService;
        $this->service = $service;
    }

    public function get($slug){
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        $legal = $this->legalService->main_all();
        $data = $this->blogService->getBySlugMain($slug);
        $next = $this->blogService->getNext($data->id);
        $prev = $this->blogService->getPrev($data->id);
        $serviceOption = $this->service->main_all();
        return view('main.pages.blogs.detail', compact([
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'data',
            'next',
            'prev',
            'legal',
            'serviceOption',
        ]));
    }

}
