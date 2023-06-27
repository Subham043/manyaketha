<?php

namespace App\Modules\ServicePage\Services;

use App\Http\Services\FileService;
use App\Modules\ServicePage\Models\Service as ServiceModel;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Spatie\QueryBuilder\AllowedFilter;

class Service
{

    public function all(): Collection
    {
        return ServiceModel::all();
    }

    public function paginate(Int $total = 10): LengthAwarePaginator
    {
        $query = ServiceModel::latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(Int $id): ServiceModel|null
    {
        return ServiceModel::findOrFail($id);
    }

    public function create(array $data): ServiceModel
    {
        $service = ServiceModel::create($data);
        $service->user_id = auth()->user()->id;
        $service->save();
        return $service;
    }

    public function update(array $data, ServiceModel $service): ServiceModel
    {
        $service->update($data);
        return $service;
    }

    public function saveBrochure(ServiceModel $service): ServiceModel
    {
        $this->deleteBrochure($service);
        $brochure = (new FileService)->save_file('brochure', (new ServiceModel)->brochure_path);
        return $this->update([
            'brochure' => $brochure,
        ], $service);
    }

    public function saveImage(ServiceModel $service): ServiceModel
    {
        $this->deleteImage($service);
        $image = (new FileService)->save_file('image', (new ServiceModel)->image_path);
        return $this->update([
            'image' => $image,
        ], $service);
    }

    public function delete(ServiceModel $service): bool|null
    {
        $this->deleteBrochure($service);
        $this->deleteImage($service);
        $service->amenity()->detach();
        return $service->delete();
    }

    public function deleteBrochure(ServiceModel $service): void
    {
        if($service->brochure){
            $path = str_replace("storage","app/public",$service->brochure);
            (new FileService)->delete_file($path);
        }
    }

    public function deleteImage(ServiceModel $service): void
    {
        if($service->image){
            $path = str_replace("storage","app/public",$service->image);
            (new FileService)->delete_file($path);
        }
    }

    public function clear_cache(ServiceModel $service): void
    {
        Cache::forget('all_service_main');
        Cache::forget('latest_six_service_main');
        Cache::forget('service_'.$service->slug);
    }

    public function main_all()
    {
        return Cache::remember('all_service_main', 60*60*24, function(){
            return ServiceModel::select('name', 'heading', 'slug', 'id')->where('is_draft', true)->get();
        });
    }

    public function main_latest_six()
    {
        return Cache::remember('latest_six_service_main', 60*60*24, function(){
            return ServiceModel::where('is_draft', true)->limit(6)->get();
        });
    }

    public function main_paginate(Int $total = 10, bool $status = false): LengthAwarePaginator
    {
        $query = ServiceModel::where('is_draft', true)
                    ->latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getBySlugMain(String $slug): ServiceModel|null
    {
        return ServiceModel::with('additional_contents')->where('slug', $slug)
        ->where('is_draft', true)
        ->firstOrFail();
        // return Cache::remember('service_'.$slug, 60*60*24, function() use($slug){
        // });
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
