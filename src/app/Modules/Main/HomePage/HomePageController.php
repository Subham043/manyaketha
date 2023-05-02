<?php

namespace App\Modules\Main\HomePage;

use App\Modules\Main\BaseController\BaseController;

class HomePageController extends BaseController
{

    public function get(){
        $legal = $this->legalService->main_all();
        $seo = $this->seoService->getBySlugMain('home-page');
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        return view('main.pages.index', compact([
            'legal',
            'seo',
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
        ]));
    }

}
