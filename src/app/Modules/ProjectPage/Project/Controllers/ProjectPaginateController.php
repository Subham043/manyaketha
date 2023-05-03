<?php

namespace App\Modules\ProjectPage\Project\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ProjectPage\Project\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectPaginateController extends Controller
{
    private $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->middleware('permission:list projects', ['only' => ['get']]);
        $this->projectService = $projectService;
    }

    public function get(Request $request){
        $data = $this->projectService->paginate($request->total ?? 10);
        return view('admin.pages.project.paginate', compact(['data']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
