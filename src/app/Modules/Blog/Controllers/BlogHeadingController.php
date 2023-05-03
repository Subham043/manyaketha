<?php

namespace App\Modules\Blog\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Requests\BlogHeadingRequest;
use App\Modules\Blog\Services\BlogHeadingService;

class BlogHeadingController extends Controller
{
    private $blogHeadingService;

    public function __construct(BlogHeadingService $blogHeadingService)
    {
        $this->middleware('permission:list blogs', ['only' => ['post']]);
        $this->blogHeadingService = $blogHeadingService;
    }

    public function post(BlogHeadingRequest $request){
        try {
            //code...
            $this->blogHeadingService->createOrUpdate(
                $request->validated(),
            );
            return response()->json(["message" => "Blog heading updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
