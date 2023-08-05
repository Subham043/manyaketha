<?php

namespace App\Modules\Campaign\Services;

use App\Http\Services\FileService;
use App\Modules\Campaign\Models\Campaign as CampaignModel;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Spatie\QueryBuilder\AllowedFilter;

class Campaign
{

    public function all(): Collection
    {
        return CampaignModel::all();
    }

    public function paginate(Int $total = 10): LengthAwarePaginator
    {
        $query = CampaignModel::latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(Int $id): CampaignModel|null
    {
        return CampaignModel::findOrFail($id);
    }

    public function create(array $data): CampaignModel
    {
        $campaign = CampaignModel::create($data);
        return $campaign;
    }

    public function update(array $data, CampaignModel $campaign): CampaignModel
    {
        $campaign->update($data);
        return $campaign;
    }

    public function saveBannerImage(CampaignModel $campaign): CampaignModel
    {
        $this->deleteBannerImage($campaign);
        $banner_image = (new FileService)->save_file('banner_image', (new CampaignModel)->cmapaign_path);
        return $this->update([
            'banner_image' => $banner_image,
        ], $campaign);
    }

    public function saveAboutImage(CampaignModel $campaign): CampaignModel
    {
        $this->deleteAboutImage($campaign);
        $about_image = (new FileService)->save_file('about_image', (new CampaignModel)->cmapaign_path);
        return $this->update([
            'about_image' => $about_image,
        ], $campaign);
    }

    public function saveHeaderLogo(CampaignModel $campaign): CampaignModel
    {
        $this->deleteHeaderLogo($campaign);
        $header_logo = (new FileService)->save_file('header_logo', (new CampaignModel)->cmapaign_path);
        return $this->update([
            'header_logo' => $header_logo,
        ], $campaign);
    }

    public function saveFooterLogo(CampaignModel $campaign): CampaignModel
    {
        $this->deleteFooterLogo($campaign);
        $footer_logo = (new FileService)->save_file('footer_logo', (new CampaignModel)->cmapaign_path);
        return $this->update([
            'footer_logo' => $footer_logo,
        ], $campaign);
    }

    public function delete(CampaignModel $campaign): bool|null
    {
        $this->deleteBannerImage($campaign);
        $this->deleteAboutImage($campaign);
        $this->deleteHeaderLogo($campaign);
        $this->deleteFooterLogo($campaign);
        return $campaign->delete();
    }

    public function deleteBannerImage(CampaignModel $campaign): void
    {
        if($campaign->banner_image){
            $path = str_replace("storage","app/public",$campaign->banner_image);
            (new FileService)->delete_file($path);
        }
    }

    public function deleteAboutImage(CampaignModel $campaign): void
    {
        if($campaign->about_image){
            $path = str_replace("storage","app/public",$campaign->about_image);
            (new FileService)->delete_file($path);
        }
    }

    public function deleteHeaderLogo(CampaignModel $campaign): void
    {
        if($campaign->header_logo){
            $path = str_replace("storage","app/public",$campaign->header_logo);
            (new FileService)->delete_file($path);
        }
    }

    public function deleteFooterLogo(CampaignModel $campaign): void
    {
        if($campaign->footer_logo){
            $path = str_replace("storage","app/public",$campaign->footer_logo);
            (new FileService)->delete_file($path);
        }
    }

    public function clear_cache(CampaignModel $campaign): void
    {
        Cache::forget('all_campaign_main');
        Cache::forget('latest_six_campaign_main');
        Cache::forget('campaign_'.$campaign->slug);
    }

    public function main_all()
    {
        return Cache::remember('all_campaign_main', 60*60*24, function(){
            return CampaignModel::select('name', 'heading', 'slug', 'id')->where('is_draft', true)->get();
        });
    }

    public function main_latest_six()
    {
        return Cache::remember('latest_six_campaign_main', 60*60*24, function(){
            return CampaignModel::where('is_draft', true)->limit(6)->get();
        });
    }

    public function main_paginate(Int $total = 10, bool $status = false): LengthAwarePaginator
    {
        $query = CampaignModel::where('is_draft', true)
                    ->orderBy('item_order', 'asc');
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getBySlugMain(String $slug): CampaignModel|null
    {
        return CampaignModel::
        // with([
        //     'additional_contents' => function($q) {
        //         $q->with(['additional_content_images']);
        //     },
        //     'additional_content_heading',
        //     'additional_campaigns',
        //     'additional_campaign_heading'])->where('slug', $slug)
        where('is_draft', true)
        ->firstOrFail();
    }

}

class CommonFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('name', 'LIKE', '%' . $value . '%')
        ->orWhere('slug', 'LIKE', '%' . $value . '%')
        ->orWhere('heading', 'LIKE', '%' . $value . '%')
        ->orWhere('description_unfiltered', 'LIKE', '%' . $value . '%');
    }
}
