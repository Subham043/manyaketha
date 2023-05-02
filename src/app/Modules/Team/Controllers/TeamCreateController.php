<?php

namespace App\Modules\Team\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Team\Requests\TeamCreateRequest;
use App\Modules\Team\Services\TeamService;

class TeamCreateController extends Controller
{
    private $teamService;

    public function __construct(TeamService $teamService)
    {
        $this->middleware('permission:create teams', ['only' => ['get','post']]);
        $this->teamService = $teamService;
    }

    public function get(){
        return view('admin.pages.team.create');
    }

    public function post(TeamCreateRequest $request){

        try {
            //code...
            $team = $this->teamService->create(
                $request->except('image')
            );
            if($request->image==true && $request->hasFile('image')){
                $this->teamService->saveImage($team);
            }
            return response()->json(["message" => "Team created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
