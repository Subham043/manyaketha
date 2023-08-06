<?php

namespace App\Modules\CallToAction\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\CallToAction\Requests\CallToActionRequest;
use App\Modules\CallToAction\Services\CallToActionService;

class CallToActionController extends Controller
{
    private $offerService;

    public function __construct(CallToActionService $offerService)
    {
        $this->middleware('permission:edit call to action', ['only' => ['get','post']]);
        $this->offerService = $offerService;
    }

    public function get(){
        $data = $this->offerService->getById(1);
        return view('admin.pages.ctc.index', compact('data'));
    }

    public function post(CallToActionRequest $request){
        try {
            //code...
            $main = $this->offerService->createOrUpdate(
                $request->except('image'),
            );
            return response()->json(["message" => "Call To Action updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
