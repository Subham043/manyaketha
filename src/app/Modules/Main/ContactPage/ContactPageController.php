<?php

namespace App\Modules\Main\ContactPage;

use App\Http\Services\RateLimitService;
use App\Modules\Enquiry\ContactForm\Requests\ContactFormRequest;
use App\Modules\Enquiry\ContactForm\Services\ContactFormService;
use App\Modules\Legal\Services\LegalService;
use App\Modules\Main\BaseController\BaseController;
use App\Modules\Seo\Services\SeoService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use App\Modules\Settings\Services\ThemeService;

class ContactPageController extends BaseController
{
    private ContactFormService $contactFormService;
    private Service $service;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ThemeService $themeService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        ContactFormService $contactFormService,
        Service $service,
    )
    {
        parent::__construct($seoService, $generalService, $themeService, $chatbotService, $legalService);
        $this->contactFormService = $contactFormService;
        $this->service = $service;
    }

    public function get(){
        $seo = $this->seoService->getBySlugMain('contact-page');
        $generalSetting = $this->generalService->getById(1);
        $themeSetting = $this->themeService->getById(1);
        $chatbotSetting = $this->chatbotService->getById(1);
        $legal = $this->legalService->main_all();
        $serviceOption = $this->service->main_all();
        return view('main.pages.contact', compact([
            'seo',
            'generalSetting',
            'themeSetting',
            'chatbotSetting',
            'legal',
            'serviceOption',
        ]));
    }

    public function post(ContactFormRequest $request){

        try {
            //code...
            $this->contactFormService->create(
                $request->validated()
            );
            (new RateLimitService($request))->clearRateLimit();
            return response()->json(["message" => "Enquiry recieved successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }

}
