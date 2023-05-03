<?php

namespace App\Modules\ProjectPage\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ProjectPage\Category\Requests\CategoryCreateRequest;
use App\Modules\ProjectPage\Category\Services\CategoryService;

class CategoryCreateController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->middleware('permission:create project categories', ['only' => ['get','post']]);
        $this->categoryService = $categoryService;
    }

    public function get(){
        return view('admin.pages.project.category.create');
    }

    public function post(CategoryCreateRequest $request){

        try {
            //code...
            $this->categoryService->create(
                $request->validated()
            );
            return response()->json(["message" => "Category created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
