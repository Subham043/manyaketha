<?php

namespace App\Modules\Offer\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Offer\Requests\OfferRequest;
use App\Modules\Offer\Services\OfferService;

class OfferController extends Controller
{
    private $offerService;

    public function __construct(OfferService $offerService)
    {
        $this->offerService = $offerService;
    }

    public function get(){
        $data = $this->offerService->getById(1);
        return view('admin.pages.offer.index', compact('data'));
    }

    public function post(OfferRequest $request){
        try {
            //code...
            $main = $this->offerService->createOrUpdate(
                $request->except('image'),
            );
            return response()->json(["message" => "Offer updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
