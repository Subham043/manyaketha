<?php

namespace App\Modules\Procedure\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Procedure\Requests\ProcedureHeadingRequest;
use App\Modules\Procedure\Services\ProcedureHeadingService;

class ProcedureHeadingController extends Controller
{
    private $procedureHeadingService;

    public function __construct(ProcedureHeadingService $procedureHeadingService)
    {
        $this->middleware('permission:list procedures', ['only' => ['post']]);
        $this->procedureHeadingService = $procedureHeadingService;
    }

    public function post(ProcedureHeadingRequest $request){
        try {
            //code...
            $this->procedureHeadingService->createOrUpdate(
                $request->validated(),
            );
            return response()->json(["message" => "Procedure heading updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
