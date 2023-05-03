<?php

namespace App\Modules\ServicePage\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ServicePage\Requests\ServiceUpdateRequest;
use App\Modules\ServicePage\Services\Service;

class ServiceUpdateController extends Controller
{
    private $service;

    public function __construct(Service $service)
    {
        $this->middleware('permission:edit services', ['only' => ['get','post']]);
        $this->service = $service;
    }

    public function get($id){
        $data = $this->service->getById($id);
        return view('admin.pages.service.update', compact(['data']));
    }

    public function post(ServiceUpdateRequest $request, $id){
        $service = $this->service->getById($id);
        try {
            //code...
            $this->service->update(
                $request->except(['brochure', 'image']),
                $service
            );
            if($request->hasFile('image')){
                $this->service->saveImage($service);
            }
            if($request->hasFile('brochure')){
                $this->service->saveBrochure($service);
            }
            return response()->json(["message" => "Service updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
