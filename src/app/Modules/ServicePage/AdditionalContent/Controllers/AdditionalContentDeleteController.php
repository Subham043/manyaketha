<?php

namespace App\Modules\ServicePage\AdditionalContent\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalContent\Services\AdditionalContentService;

class AdditionalContentDeleteController extends Controller
{
    private $additionalContentService;

    public function __construct(AdditionalContentService $additionalContentService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalContentService = $additionalContentService;
    }

    public function get($service_id, $id){
        $additional_content = $this->additionalContentService->getById($service_id, $id);

        try {
            //code...
            $this->additionalContentService->delete(
                $additional_content
            );
            return redirect()->back()->with('success_status', 'Additional Content deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
