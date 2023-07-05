<?php

namespace App\Modules\ServicePage\AdditionalServiceContentImage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalServiceContentImage\Services\AdditionalServiceContentImageService;

class AdditionalServiceContentImageDeleteController extends Controller
{
    private $additionalContentImageService;

    public function __construct(AdditionalServiceContentImageService $additionalContentImageService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalContentImageService = $additionalContentImageService;
    }

    public function get($service_id, $additional_service_id, $additional_service_content_id, $id){
        $additional_content_image = $this->additionalContentImageService->getById($additional_service_content_id, $id);

        try {
            //code...
            $this->additionalContentImageService->delete(
                $additional_content_image
            );
            return redirect()->back()->with('success_status', 'Additional Content Image deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
