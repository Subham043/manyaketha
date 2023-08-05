<?php

namespace App\Modules\Campaign\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Services\Campaign;

class CampaignDeleteController extends Controller
{
    private $campaign;

    public function __construct(Campaign $campaign)
    {
        $this->middleware('permission:delete campaigns', ['only' => ['get']]);
        $this->campaign = $campaign;
    }

    public function get($id){
        $campaign = $this->campaign->getById($id);

        try {
            //code...
            $this->campaign->delete(
                $campaign
            );
            return redirect()->back()->with('success_status', 'Campaign deleted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error_status', 'Something went wrong. Please try again');
        }
    }

}
