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

class ContactPageController extends BaseController
{
    private ContactFormService $contactFormService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        ContactFormService $contactFormService,
        Service $service,
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->contactFormService = $contactFormService;
    }

    public function get(){
        return view('main.pages.contact')->with([
            'legal' => $this->legal_all(),
            'seo' => $this->seo('contact-page'),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
        ]);
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
