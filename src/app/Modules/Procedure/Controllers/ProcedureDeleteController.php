<?php

namespace App\Modules\Procedure\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Procedure\Services\ProcedureService;

class ProcedureDeleteController extends Controller
{
    private $procedureService;

    public function __construct(ProcedureService $procedureService)
    {
        $this->middleware('permission:delete procedures', ['only' => ['get']]);
        $this->procedureService = $procedureService;
    }

    public function get($id){
        $procedure = $this->procedureService->getById($id);

        try {
            //code...
            $this->procedureService->delete(
                $procedure
            );
            return redirect()->back()->with('success_status', 'Procedure deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
