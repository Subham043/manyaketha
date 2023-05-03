<?php

namespace App\Modules\ProjectPage\Project\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ProjectPage\Project\Services\ProjectService;

class ProjectDeleteController extends Controller
{
    private $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->middleware('permission:delete projects', ['only' => ['get']]);
        $this->projectService = $projectService;
    }

    public function get($id){
        $project = $this->projectService->getById($id);

        try {
            //code...
            $this->projectService->delete(
                $project
            );
            return redirect()->back()->with('success_status', 'Gallery Image deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
