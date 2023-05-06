<?php

namespace App\Modules\Main\BlogPage;

use App\Modules\Legal\Services\LegalService;
use App\Modules\Blog\Services\BlogService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;

class BlogDetailPageController extends BaseController
{
    private BlogService $blogService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        BlogService $blogService,
        Service $service,
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->blogService = $blogService;
    }

    public function get($slug){
        $data = $this->blogService->getBySlugMain($slug);
        $next = $this->blogService->getNext($data->id);
        $prev = $this->blogService->getPrev($data->id);
        return view('main.pages.blogs.detail', compact([
            'data',
            'next',
            'prev',
        ]))->with([
            'legal' => $this->legal_all(),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
    }

}
