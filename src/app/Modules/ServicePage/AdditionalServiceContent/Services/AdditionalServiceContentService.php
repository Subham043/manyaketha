<?php

namespace App\Modules\ServicePage\AdditionalServiceContent\Services;

use App\Http\Services\FileService;
use App\Modules\ServicePage\AdditionalServiceContent\Models\AdditionalServiceContent;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;

class AdditionalServiceContentService
{

    public function all(int $additional_service_id): Collection
    {
        return AdditionalServiceContent::where('additional_service_id', $additional_service_id)->get();
    }

    public function paginate(int $additional_service_id, Int $total = 10): LengthAwarePaginator
    {
        $query = AdditionalServiceContent::where('additional_service_id', $additional_service_id)->latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(int $additional_service_id, Int $id): AdditionalServiceContent|null
    {
        return AdditionalServiceContent::where('additional_service_id', $additional_service_id)->findOrFail($id);
    }

    public function create(array $data): AdditionalServiceContent
    {
        $addition_content = AdditionalServiceContent::create($data);
        $addition_content->save();
        return $addition_content;
    }

    public function update(array $data, AdditionalServiceContent $addition_content): AdditionalServiceContent
    {
        $addition_content->update($data);
        return $addition_content;
    }

    public function saveImage(AdditionalServiceContent $addition_content): AdditionalServiceContent
    {
        $this->deleteImage($addition_content);
        $image = (new FileService)->save_file('image', (new AdditionalServiceContent)->image_path);
        return $this->update([
            'image' => $image,
        ], $addition_content);
    }

    public function delete(AdditionalServiceContent $addition_content): bool|null
    {
        $this->deleteImage($addition_content);
        return $addition_content->delete();
    }

    public function deleteImage(AdditionalServiceContent $addition_content): void
    {
        if($addition_content->image){
            $path = str_replace("storage","app/public",$addition_content->image);
            (new FileService)->delete_file($path);
        }
    }

    public function main_all(int $additional_service_id): Collection
    {
        return AdditionalServiceContent::where('additional_service_id', $additional_service_id)->latest()->get();
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
