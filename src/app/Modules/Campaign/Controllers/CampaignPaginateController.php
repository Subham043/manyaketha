<?php

namespace App\Modules\Campaign\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Services\Campaign;
use Illuminate\Http\Request;

class CampaignPaginateController extends Controller
{
    private $campaign;

    public function __construct(Campaign $campaign)
    {
        $this->middleware('permission:list campaigns', ['only' => ['get']]);
        $this->campaign = $campaign;
    }

    public function get(Request $request){
        $data = $this->campaign->paginate($request->total ?? 10);
        return view('admin.pages.campaign.paginate', compact(['data']))
            ->with('search', $request->query('filter')['search'] ?? '');
    }

}
