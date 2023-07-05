<?php

namespace App\Modules\Main\BlogPage;

use App\Modules\Blog\Services\BlogHeadingService;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Blog\Services\BlogService;
use App\Modules\CallToAction\Services\CallToActionService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;
use Illuminate\Http\Request;

class BlogPageController extends BaseController
{
    private BlogService $blogService;
    private BlogHeadingService $blogHeadingService;
    private CallToActionService $callToActionService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        BlogService $blogService,
        BlogHeadingService $blogHeadingService,
        Service $service,
        CallToActionService $callToActionService
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->blogService = $blogService;
        $this->blogHeadingService = $blogHeadingService;
        $this->callToActionService = $callToActionService;
    }

    public function get(Request $request){
        $blogs = $this->blogService->main_paginate($request->total ?? 10);
        $blogHeading = $this->blogHeadingService->getById(1);
        $callToAction = $this->callToActionService->getById(1);
        return view('main.pages.blogs.index', compact([
            'blogs',
            'blogHeading',
            'callToAction',
        ]))->with([
            'legal' => $this->legal_all(),
            'seo' => $this->seo('blog-page'),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
    }

}
