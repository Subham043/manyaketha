<?php

namespace App\Modules\Team\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Team\Services\TeamService;

class TeamDeleteController extends Controller
{
    private $teamService;

    public function __construct(TeamService $teamService)
    {
        $this->middleware('permission:delete teams', ['only' => ['get']]);
        $this->teamService = $teamService;
    }

    public function get($id){
        $team = $this->teamService->getById($id);

        try {
            //code...
            $this->teamService->delete(
                $team
            );
            return redirect()->back()->with('success_status', 'Team deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
