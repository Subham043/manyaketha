<?php

namespace App\Modules\Procedure\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Procedure\Requests\ProcedureCreateRequest;
use App\Modules\Procedure\Services\ProcedureService;

class ProcedureCreateController extends Controller
{
    private $procedureService;

    public function __construct(ProcedureService $procedureService)
    {
        $this->middleware('permission:create procedures', ['only' => ['get','post']]);
        $this->procedureService = $procedureService;
    }

    public function get(){
        return view('admin.pages.procedure.create');
    }

    public function post(ProcedureCreateRequest $request){

        try {
            //code...
            $procedure = $this->procedureService->create(
                $request->except('image')
            );
            if($request->hasFile('image')){
                $this->procedureService->saveImage($procedure);
            }
            return response()->json(["message" => "Procedure created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
