<?php

namespace App\Modules\Campaign\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Campaign\Models\Campaign as ModelsCampaign;
use App\Modules\Campaign\Requests\CampaignUpdateRequest;
use App\Modules\Campaign\Services\Campaign;

class CampaignUpdateController extends Controller
{
    private $campaign;

    public function __construct(Campaign $campaign)
    {
        $this->middleware('permission:edit campaigns', ['only' => ['get','post']]);
        $this->campaign = $campaign;
    }

    public function get($id){
        $data = $this->campaign->getById($id);
        return view('admin.pages.campaign.update', compact(['data']));
    }

    public function post(CampaignUpdateRequest $request, $id){
        $campaign = $this->campaign->getById($id);
        try {
            //code...
            $this->campaign->update(
                $request->except(['banner_image', 'about_image', 'header_logo', 'footer_logo']),
                $campaign
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
            return response()->json(["message" => "Campaign updated successfully."], 201);
        } catch (\Throwable $th) {
            return response()->json(["message" => "Something went wrong. Please try again"], 400);
        }

    }
}
