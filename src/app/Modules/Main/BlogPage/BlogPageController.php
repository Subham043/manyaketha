<?php

namespace App\Modules\Main\BlogPage;

use App\Modules\Legal\Services\LegalService;
use App\Modules\Blog\Services\BlogService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Seo\Services\SeoService;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;
use Illuminate\Http\Request;

class BlogPageController extends BaseController
{
    private $blogService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ThemeService $themeService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        BlogService $blogService,
    )
    {
        parent::__construct($seoService, $generalService, $themeService, $chatbotService, $legalService);
        $this->blogService = $blogService;
    }

    public function get(Request $request){
        $seo = $this->seoService->getBySlugMain('blog-page');
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        $blogs = $this->blogService->main_paginate($request->total ?? 10);
        $legal = $this->legalService->main_all();
        return view('main.pages.blogs.index', compact([
            'seo',
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'blogs',
            'legal'
        ]));
    }

}
