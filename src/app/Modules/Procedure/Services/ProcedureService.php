<?php

namespace App\Modules\Procedure\Services;

use App\Http\Services\FileService;
use App\Modules\Procedure\Models\Procedure;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Spatie\QueryBuilder\AllowedFilter;

class ProcedureService
{

    public function all(): Collection
    {
        return Procedure::all();
    }

    public function paginate(Int $total = 10): LengthAwarePaginator
    {
        $query = Procedure::latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(Int $id): Procedure|null
    {
        return Procedure::findOrFail($id);
    }

    public function create(array $data): Procedure
    {
        $procedure = Procedure::create($data);
        $procedure->user_id = auth()->user()->id;
        $procedure->save();
        return $procedure;
    }

    public function update(array $data, Procedure $procedure): Procedure
    {
        $procedure->update($data);
        return $procedure;
    }

    public function saveImage(Procedure $procedure): Procedure
    {
        $this->deleteImage($procedure);
        $image = (new FileService)->save_file('image', (new Procedure)->image_path);
        return $this->update([
            'image' => $image,
        ], $procedure);
    }

    public function delete(Procedure $procedure): bool|null
    {
        return $procedure->delete();
    }

    public function deleteImage(Procedure $procedure): void
    {
        if($procedure->image){
            $path = str_replace("storage","app/public",$procedure->image);
            (new FileService)->delete_file($path);
        }
    }

    public function main_all(): Collection
    {
        return Cache::remember('procedures_main', 60*60*24, function(){
            return Procedure::where('is_draft', true)->latest()->get();
        });
    }

}

class CommonFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('title', 'LIKE', '%' . $value . '%');
    }
}
