<?php

namespace App\Modules\ServicePage\AdditionalContent\Services;

use App\Http\Services\FileService;
use App\Modules\ServicePage\AdditionalContent\Models\AdditionalContent;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;

class AdditionalContentService
{

    public function all(int $service_id): Collection
    {
        return AdditionalContent::where('service_id', $service_id)->get();
    }

    public function paginate(int $service_id, Int $total = 10): LengthAwarePaginator
    {
        $query = AdditionalContent::where('service_id', $service_id)->latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(int $service_id, Int $id): AdditionalContent|null
    {
        return AdditionalContent::where('service_id', $service_id)->findOrFail($id);
    }

    public function create(array $data): AdditionalContent
    {
        $addition_content = AdditionalContent::create($data);
        $addition_content->user_id = auth()->user()->id;
        $addition_content->save();
        return $addition_content;
    }

    public function update(array $data, AdditionalContent $addition_content): AdditionalContent
    {
        $addition_content->update($data);
        return $addition_content;
    }

    public function saveImage(AdditionalContent $addition_content): AdditionalContent
    {
        $this->deleteImage($addition_content);
        $image = (new FileService)->save_file('image', (new AdditionalContent)->image_path);
        return $this->update([
            'image' => $image,
        ], $addition_content);
    }

    public function delete(AdditionalContent $addition_content): bool|null
    {
        $this->deleteImage($addition_content);
        return $addition_content->delete();
    }

    public function deleteImage(AdditionalContent $addition_content): void
    {
        if($addition_content->image){
            $path = str_replace("storage","app/public",$addition_content->image);
            (new FileService)->delete_file($path);
        }
    }

    public function main_all(int $service_id): Collection
    {
        return AdditionalContent::where('service_id', $service_id)->latest()->get();
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
