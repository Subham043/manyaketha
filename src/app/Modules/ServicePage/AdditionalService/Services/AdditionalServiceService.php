<?php

namespace App\Modules\ServicePage\AdditionalService\Services;

use App\Http\Services\FileService;
use App\Modules\ServicePage\AdditionalService\Models\AdditionalService;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;

class AdditionalServiceService
{

    public function all(int $service_id): Collection
    {
        return AdditionalService::where('service_id', $service_id)->get();
    }

    public function paginate(int $service_id, Int $total = 10): LengthAwarePaginator
    {
        $query = AdditionalService::where('service_id', $service_id)->latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(int $service_id, Int $id): AdditionalService|null
    {
        return AdditionalService::where('service_id', $service_id)->findOrFail($id);
    }

    public function create(array $data): AdditionalService
    {
        $addition_content = AdditionalService::create($data);
        $addition_content->user_id = auth()->user()->id;
        $addition_content->save();
        return $addition_content;
    }

    public function update(array $data, AdditionalService $addition_content): AdditionalService
    {
        $addition_content->update($data);
        return $addition_content;
    }

    public function saveImage(AdditionalService $addition_content): AdditionalService
    {
        $this->deleteImage($addition_content);
        $image = (new FileService)->save_file('image', (new AdditionalService)->image_path);
        return $this->update([
            'image' => $image,
        ], $addition_content);
    }

    public function delete(AdditionalService $addition_content): bool|null
    {
        $this->deleteImage($addition_content);
        return $addition_content->delete();
    }

    public function deleteImage(AdditionalService $addition_content): void
    {
        if($addition_content->image){
            $path = str_replace("storage","app/public",$addition_content->image);
            (new FileService)->delete_file($path);
        }
    }

    public function main_all(int $service_id): Collection
    {
        return AdditionalService::where('service_id', $service_id)->latest()->get();
    }

    public function getBySlugMain(String $service_slug, String $slug): AdditionalService|null
    {
        return AdditionalService::with([
            'service' => function($query) use($service_slug){
                $query->where('slug', $service_slug)->where('is_draft', true);
            }
        ])->where('slug', $slug)->whereHas('service', function($query) use($service_slug){
            $query->where('slug', $service_slug)->where('is_draft', true);
        })
        ->firstOrFail();
        // return Cache::remember('service_'.$slug, 60*60*24, function() use($slug){
        // });
    }

}

class CommonFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query
        ->where('description_unfiltered', 'LIKE', '%' . $value . '%');
    }
}
