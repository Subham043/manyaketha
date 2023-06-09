<?php

namespace App\Modules\Main\ContactPage;

use App\Http\Services\RateLimitService;
use App\Modules\CallToAction\Services\CallToActionService;
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
    private CallToActionService $callToActionService;

    public function __construct(
        SeoService $seoService,
        GeneralService $generalService,
        ChatbotService $chatbotService,
        LegalService $legalService,
        ContactFormService $contactFormService,
        Service $service,
        CallToActionService $callToActionService,
    )
    {
        parent::__construct($seoService, $generalService, $chatbotService, $legalService, $service);
        $this->contactFormService = $contactFormService;
        $this->callToActionService = $callToActionService;
    }

    public function get(){
        $callToAction = $this->callToActionService->getById(1);
        return view('main.pages.contact')->with([
            'legal' => $this->legal_all(),
            'seo' => $this->seo('contact-page'),
            'generalSetting' => $this->general_setting(),
            'chatbotSetting' => $this->chatbot_setting(),
            'serviceOption' => $this->service_option(),
            'callToAction' => $callToAction
        ]);
    }

    public function post(ContactFormRequest $request){

        try {
            //code...
            $contactForm = $this->contactFormService->create(
                $request->safe()->except('image')
            );
            if($request->hasFile('image')){
                $this->contactFormService->saveImage($contactForm);
            }
            (new RateLimitService($request))->clearRateLimit();
            return response()->json(["message" => "Enquiry recieved successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }

}
