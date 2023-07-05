<?php

namespace App\Modules\ServicePage\AdditionalContentImage\Services;

use App\Http\Services\FileService;
use App\Modules\ServicePage\AdditionalContentImage\Models\AdditionalContentImage;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;

class AdditionalContentImageService
{

    public function all(int $service_content_id): Collection
    {
        return AdditionalContentImage::where('service_content_id', $service_content_id)->get();
    }

    public function paginate(int $service_content_id, Int $total = 10): LengthAwarePaginator
    {
        $query = AdditionalContentImage::where('service_content_id', $service_content_id)->latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(int $service_content_id, Int $id): AdditionalContentImage|null
    {
        return AdditionalContentImage::where('service_content_id', $service_content_id)->findOrFail($id);
    }

    public function create(array $data): AdditionalContentImage
    {
        $addition_content_image = AdditionalContentImage::create($data);
        $addition_content_image->save();
        return $addition_content_image;
    }

    public function update(array $data, AdditionalContentImage $addition_content_image): AdditionalContentImage
    {
        $addition_content_image->update($data);
        return $addition_content_image;
    }

    public function saveImage(AdditionalContentImage $addition_content_image): AdditionalContentImage
    {
        $this->deleteImage($addition_content_image);
        $image = (new FileService)->save_file('image', (new AdditionalContentImage)->image_path);
        return $this->update([
            'image' => $image,
        ], $addition_content_image);
    }

    public function delete(AdditionalContentImage $addition_content_image): bool|null
    {
        $this->deleteImage($addition_content_image);
        return $addition_content_image->delete();
    }

    public function deleteImage(AdditionalContentImage $addition_content_image): void
    {
        if($addition_content_image->image){
            $path = str_replace("storage","app/public",$addition_content_image->image);
            (new FileService)->delete_file($path);
        }
    }

    public function main_all(int $service_content_id): Collection
    {
        return AdditionalContentImage::where('service_content_id', $service_content_id)->latest()->get();
    }

}

class CommonFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query
        ->where('image', 'LIKE', '%' . $value . '%');
    }
}
