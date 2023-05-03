<?php

namespace App\Modules\ProjectPage\Project\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ProjectPage\Category\Services\CategoryService;
use App\Modules\ProjectPage\Project\Requests\ProjectCreateRequest;
use App\Modules\ProjectPage\Project\Services\ProjectService;

class ProjectCreateController extends Controller
{
    private $categoryService;
    private $projectService;

    public function __construct(ProjectService $projectService, CategoryService $categoryService)
    {
        $this->middleware('permission:create projects', ['only' => ['get','post']]);
        $this->projectService = $projectService;
        $this->categoryService = $categoryService;
    }

    public function get(){
        $category = $this->categoryService->all();
        return view('admin.pages.project.create', compact(['category']));
    }

    public function post(ProjectCreateRequest $request){

        try {
            //code...
            $project = $this->projectService->create(
                $request->except('image')
            );
            if($request->hasFile('image')){
                $this->projectService->saveImage($project);
            }
            return response()->json(["message" => "Project created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
