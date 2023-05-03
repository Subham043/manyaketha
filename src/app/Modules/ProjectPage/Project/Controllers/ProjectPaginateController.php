<?php

namespace App\Modules\ProjectPage\Project\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ProjectPage\Project\Services\ProjectHeadingService;
use App\Modules\ProjectPage\Project\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectPaginateController extends Controller
{
    private $projectService;
    private $projectHeadingService;

    public function __construct(ProjectService $projectService, ProjectHeadingService $projectHeadingService)
    {
        $this->middleware('permission:list projects', ['only' => ['get']]);
        $this->projectService = $projectService;
        $this->projectHeadingService = $projectHeadingService;
    }

    public function get(Request $request){
        $data = $this->projectService->paginate($request->total ?? 10);
        $projectHeading = $this->projectHeadingService->getById(1);
        return view('admin.pages.project.paginate', compact(['data', 'projectHeading']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
