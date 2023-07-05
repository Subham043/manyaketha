<?php

namespace App\Modules\ServicePage\AdditionalServiceContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalServiceContent\Services\AdditionalServiceContentService;

class AdditionalServiceContentDeleteController extends Controller
{
    private $additionalServiceContentService;

    public function __construct(AdditionalServiceContentService $additionalServiceContentService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalServiceContentService = $additionalServiceContentService;
    }

    public function get($service_id, $additional_service_id, $id){
        $additional_content = $this->additionalServiceContentService->getById($additional_service_id, $id);

        try {
            //code...
            $this->additionalServiceContentService->delete(
                $additional_content
            );
            return redirect()->back()->with('success_status', 'Additional Service Content deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
