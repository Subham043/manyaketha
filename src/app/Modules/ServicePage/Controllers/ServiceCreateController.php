<?php

namespace App\Modules\ServicePage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\Requests\ServiceCreateRequest;
use App\Modules\ServicePage\Services\Service;

class ServiceCreateController extends Controller
{
    private $service;

    public function __construct(Service $service)
    {
        $this->middleware('permission:create services', ['only' => ['get','post']]);
        $this->service = $service;
    }

    public function get(){
        return view('admin.pages.service.create');
    }

    public function post(ServiceCreateRequest $request){

        try {
            //code...
            $service = $this->service->create(
                $request->except(['brochure', 'image'])
            );
            if($request->hasFile('image')){
                $this->service->saveImage($service);
            }
            if($request->hasFile('brochure')){
                $this->service->saveBrochure($service);
            }
            return response()->json(["message" => "Service created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
