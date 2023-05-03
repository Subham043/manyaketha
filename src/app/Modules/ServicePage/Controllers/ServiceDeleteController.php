<?php

namespace App\Modules\ServicePage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\Services\Service;

class ServiceDeleteController extends Controller
{
    private $service;

    public function __construct(Service $service)
    {
        $this->middleware('permission:delete services', ['only' => ['get']]);
        $this->service = $service;
    }

    public function get($id){
        $service = $this->service->getById($id);

        try {
            //code...
            $this->service->delete(
                $service
            );
            return redirect()->back()->with('success_status', 'Service deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
