<?php

namespace App\Modules\ServicePage\AdditionalContentImage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalContentImage\Services\AdditionalContentImageService;

class AdditionalContentImageDeleteController extends Controller
{
    private $additionalContentImageService;

    public function __construct(AdditionalContentImageService $additionalContentImageService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalContentImageService = $additionalContentImageService;
    }

    public function get($service_id, $service_content_id, $id){
        $additional_content_image = $this->additionalContentImageService->getById($service_content_id, $id);

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
