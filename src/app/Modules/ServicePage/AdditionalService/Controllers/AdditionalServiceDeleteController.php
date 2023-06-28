<?php

namespace App\Modules\ServicePage\AdditionalService\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\AdditionalService\Services\AdditionalServiceService;

class AdditionalServiceDeleteController extends Controller
{
    private $additionalServiceService;

    public function __construct(AdditionalServiceService $additionalServiceService)
    {
        $this->middleware('permission:list services', ['only' => ['get']]);
        $this->additionalServiceService = $additionalServiceService;
    }

    public function get($service_id, $id){
        $additional_service = $this->additionalServiceService->getById($service_id, $id);

        try {
            //code...
            $this->additionalServiceService->delete(
                $additional_service
            );
            return redirect()->back()->with('success_status', 'Additional Service deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
