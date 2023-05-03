<?php

namespace App\Modules\Procedure\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Procedure\Services\ProcedureHeadingService;
use App\Modules\Procedure\Services\ProcedureService;
use Illuminate\Http\Request;

class ProcedurePaginateController extends Controller
{
    private $procedureService;
    private $procedureHeadingService;

    public function __construct(ProcedureService $procedureService, ProcedureHeadingService $procedureHeadingService)
    {
        $this->middleware('permission:list procedures', ['only' => ['get']]);
        $this->procedureService = $procedureService;
        $this->procedureHeadingService = $procedureHeadingService;
    }

    public function get(Request $request){
        $procedureHeading = $this->procedureHeadingService->getById(1);
        $data = $this->procedureService->paginate($request->total ?? 10);
        return view('admin.pages.procedure.paginate', compact(['data', 'procedureHeading']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
