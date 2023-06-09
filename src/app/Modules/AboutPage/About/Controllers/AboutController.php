<?php

namespace App\Modules\AboutPage\About\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\AboutPage\About\Requests\AboutRequest;
use App\Modules\AboutPage\About\Services\AboutService;

class AboutController extends Controller
{
    private $aboutService;

    public function __construct(AboutService $aboutService)
    {
        $this->middleware('permission:edit about page about', ['only' => ['get','post']]);
        $this->aboutService = $aboutService;
    }

    public function get(){
        $data = $this->aboutService->getById(1);
        return view('admin.pages.about_page.about', compact('data'));
    }

    public function post(AboutRequest $request){
        try {
            //code...
            $main = $this->aboutService->createOrUpdate(
                $request->except('image'),
            );
            if($request->hasFile('image')){
                $this->aboutService->saveImage($main);
            }
            return response()->json(["message" => "About updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
