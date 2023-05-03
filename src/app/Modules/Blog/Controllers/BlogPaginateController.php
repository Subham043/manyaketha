<?php

namespace App\Modules\Blog\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Services\BlogHeadingService;
use App\Modules\Blog\Services\BlogService;
use Illuminate\Http\Request;

class BlogPaginateController extends Controller
{
    private $blogService;
    private $blogHeadingService;

    public function __construct(BlogService $blogService, BlogHeadingService $blogHeadingService)
    {
        $this->middleware('permission:list blogs', ['only' => ['get']]);
        $this->blogService = $blogService;
        $this->blogHeadingService = $blogHeadingService;
    }

    public function get(Request $request){
        $data = $this->blogService->paginate($request->total ?? 10);
        $blogHeading = $this->blogHeadingService->getById(1);
        return view('admin.pages.blog.paginate', compact(['data', 'blogHeading']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
