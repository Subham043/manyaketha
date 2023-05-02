<?php

namespace App\Modules\Team\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Team\Requests\TeamHeadingRequest;
use App\Modules\Team\Services\TeamHeadingService;

class TeamHeadingController extends Controller
{
    private $teamHeadingService;

    public function __construct(TeamHeadingService $teamHeadingService)
    {
        $this->middleware('permission:list teams', ['only' => ['post']]);
        $this->teamHeadingService = $teamHeadingService;
    }

    public function post(TeamHeadingRequest $request){
        try {
            //code...
            $this->teamHeadingService->createOrUpdate(
                $request->validated(),
            );
            return response()->json(["message" => "Team heading updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
