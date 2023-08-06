<?php

namespace App\Modules\Campaign\Gallery\Services;

use App\Http\Services\FileService;
use App\Modules\Campaign\Gallery\Models\Gallery;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;

class GalleryService
{

    public function all(Int $campaign_id): Collection
    {
        return Gallery::where('campaign_id', $campaign_id)->get();
    }

    public function paginate(Int $total = 10, Int $campaign_id): LengthAwarePaginator
    {
        $query = Gallery::where('campaign_id', $campaign_id)->latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(Int $id): Gallery|null
    {
        return Gallery::findOrFail($id);
    }

    public function getByIdAndCampaignId(Int $campaign_id, Int $id): Gallery|null
    {
        return Gallery::where('campaign_id', $campaign_id)->findOrFail($id);
    }

    public function create(array $data): Gallery
    {
        $gallery = Gallery::create($data);
        return $gallery;
    }

    public function update(array $data, Gallery $gallery): Gallery
    {
        $gallery->update($data);
        return $gallery;
    }

    public function saveImage(Gallery $gallery): Gallery
    {
        $this->deleteImage($gallery);
        $image = (new FileService)->save_file('image', (new Gallery)->image_path);
        return $this->update([
            'image' => $image,
        ], $gallery);
    }

    public function delete(Gallery $gallery): bool|null
    {
        $this->deleteImage($gallery);
        return $gallery->delete();
    }

    public function deleteImage(Gallery $gallery): void
    {
        if($gallery->image){
            $path = str_replace("storage","app/public",$gallery->image);
            (new FileService)->delete_file($path);
        }
    }

}

class CommonFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('image_title', 'LIKE', '%' . $value . '%');
    }
}
