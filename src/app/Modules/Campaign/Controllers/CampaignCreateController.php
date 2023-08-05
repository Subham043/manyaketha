<?php

namespace App\Modules\Campaign\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Models\Campaign as ModelsCampaign;
use App\Modules\Campaign\Requests\CampaignCreateRequest;
use App\Modules\Campaign\Services\Campaign;

class CampaignCreateController extends Controller
{
    private $campaign;

    public function __construct(Campaign $campaign)
    {
        $this->middleware('permission:create campaigns', ['only' => ['get','post']]);
        $this->campaign = $campaign;
    }

    public function get(){
        return view('admin.pages.campaign.create');
    }

    public function post(CampaignCreateRequest $request){

        try {
            //code...
            $campaign = $this->campaign->create(
                $request->except(['banner_image', 'about_image', 'header_logo', 'footer_logo'])
            );
            if($request->hasFile('banner_image')){
                $this->campaign->saveBannerImage($campaign);
            }
            if($request->hasFile('about_image')){
                $this->campaign->saveAboutImage($campaign);
            }
            if($request->hasFile('header_logo')){
                $this->campaign->saveHeaderLogo($campaign);
            }
            if($request->hasFile('footer_logo')){
                $this->campaign->saveFooterLogo($campaign);
            }
            return response()->json(["message" => "Campaign created successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
