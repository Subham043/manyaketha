<?php

namespace App\Modules\Main\AboutPage;

use App\Modules\Main\BaseController\BaseController;

class AboutPageController extends BaseController
{

    public function get(){
        $legal = $this->legalService->main_all();
        $seo = $this->seoService->getBySlugMain('about-page');
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        return view('main.pages.about', compact([
            'seo',
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'legal'
        ]));
    }

}
