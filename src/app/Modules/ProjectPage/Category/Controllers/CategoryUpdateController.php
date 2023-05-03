<?php

namespace App\Modules\ProjectPage\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ProjectPage\Category\Requests\CategoryUpdateRequest;
use App\Modules\ProjectPage\Category\Services\CategoryService;

class CategoryUpdateController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->middleware('permission:edit project categories', ['only' => ['get','post']]);
        $this->categoryService = $categoryService;
    }

    public function get($id){
        $data = $this->categoryService->getById($id);
        return view('admin.pages.project.category.update', compact('data'));
    }

    public function post(CategoryUpdateRequest $request, $id){
        $category = $this->categoryService->getById($id);
        try {
            //code...
            $this->categoryService->update(
                $request->validated(),
                $category
            );
            return response()->json(["message" => "Category updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
