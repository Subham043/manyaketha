<?php

namespace App\Modules\Team\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Team\Requests\TeamUpdateRequest;
use App\Modules\Team\Services\TeamService;

class TeamUpdateController extends Controller
{
    private $teamService;

    public function __construct(TeamService $teamService)
    {
        $this->middleware('permission:edit teams', ['only' => ['get','post']]);
        $this->teamService = $teamService;
    }

    public function get($id){
        $data = $this->teamService->getById($id);
        return view('admin.pages.team.update', compact('data'));
    }

    public function post(TeamUpdateRequest $request, $id){
        $team = $this->teamService->getById($id);
        try {
            //code...
            $this->teamService->update(
                $request->except('image'),
                $team
            );
            if($request->hasFile('image')){
                $this->teamService->saveImage($team);
            }
            return response()->json(["message" => "Team updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
