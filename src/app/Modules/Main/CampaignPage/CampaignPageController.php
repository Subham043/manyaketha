<?php

namespace App\Modules\Main\CampaignPage;

use App\Http\Controllers\Controller;

class CampaignPageController extends Controller
{

    public function get($slug){
        return view('main.pages.campaign');
    }

}
