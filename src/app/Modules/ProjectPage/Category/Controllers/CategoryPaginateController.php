<?php

namespace App\Modules\ProjectPage\Category\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\ProjectPage\Category\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryPaginateController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->middleware('permission:delete project categories', ['only' => ['get']]);
        $this->categoryService = $categoryService;
    }

    public function get(Request $request){
        $data = $this->categoryService->paginate($request->total ?? 10);
        return view('admin.pages.project.category.paginate', compact(['data']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
