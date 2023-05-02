<?php

namespace App\Modules\Team\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Team\Services\TeamHeadingService;
use App\Modules\Team\Services\TeamService;
use Illuminate\Http\Request;

class TeamPaginateController extends Controller
{
    private $teamService;
    private $teamHeadingService;

    public function __construct(TeamService $teamService, TeamHeadingService $teamHeadingService)
    {
        $this->middleware('permission:list teams', ['only' => ['get']]);
        $this->teamService = $teamService;
        $this->teamHeadingService = $teamHeadingService;
    }

    public function get(Request $request){
        $teamHeading = $this->teamHeadingService->getById(1);
        $data = $this->teamService->paginate($request->total ?? 10);
        return view('admin.pages.team.paginate', compact(['data', 'teamHeading']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
