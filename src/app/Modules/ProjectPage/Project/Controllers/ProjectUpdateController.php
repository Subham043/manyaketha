<?php

namespace App\Modules\ProjectPage\Project\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ProjectPage\Category\Services\CategoryService;
use App\Modules\ProjectPage\Project\Requests\ProjectUpdateRequest;
use App\Modules\ProjectPage\Project\Services\ProjectService;

class ProjectUpdateController extends Controller
{
    private $projectService;
    private $categoryService;

    public function __construct(ProjectService $projectService, CategoryService $categoryService)
    {
        $this->middleware('permission:edit projects', ['only' => ['get','post']]);
        $this->projectService = $projectService;
        $this->categoryService = $categoryService;
    }

    public function get($id){
        $data = $this->projectService->getById($id);
        $category = $this->categoryService->all();
        return view('admin.pages.project.update', compact(['data', 'category']));
    }

    public function post(ProjectUpdateRequest $request, $id){
        $project = $this->projectService->getById($id);
        try {
            //code...
            $this->projectService->update(
                $request->except('image'),
                $project
            );
            if($request->hasFile('image')){
                $this->projectService->saveImage($project);
            }
            return response()->json(["message" => "Gallery Image updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
