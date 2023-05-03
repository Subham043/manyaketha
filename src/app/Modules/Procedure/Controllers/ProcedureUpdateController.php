<?php

namespace App\Modules\Procedure\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Procedure\Requests\ProcedureUpdateRequest;
use App\Modules\Procedure\Services\ProcedureService;

class ProcedureUpdateController extends Controller
{
    private $procedureService;

    public function __construct(ProcedureService $procedureService)
    {
        $this->middleware('permission:edit procedures', ['only' => ['get','post']]);
        $this->procedureService = $procedureService;
    }

    public function get($id){
        $data = $this->procedureService->getById($id);
        return view('admin.pages.procedure.update', compact('data'));
    }

    public function post(ProcedureUpdateRequest $request, $id){
        $procedure = $this->procedureService->getById($id);
        try {
            //code...
            $this->procedureService->update(
                $request->except('image'),
                $procedure
            );
            if($request->hasFile('image')){
                $this->procedureService->saveImage($procedure);
            }
            return response()->json(["message" => "Procedure updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
