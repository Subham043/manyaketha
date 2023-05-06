<?php

namespace App\Modules\ProjectPage\Category\Services;

use App\Http\Services\FileService;
use App\Modules\ProjectPage\Category\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Spatie\QueryBuilder\AllowedFilter;

class CategoryService
{

    public function all(): Collection
    {
        return Category::all();
    }

    public function paginate(Int $total = 10): LengthAwarePaginator
    {
        $query = Category::latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(Int $id): Category|null
    {
        return Category::findOrFail($id);
    }

    public function create(array $data): Category
    {
        $category = Category::create($data);
        $category->user_id = auth()->user()->id;
        $category->save();
        return $category;
    }

    public function update(array $data, Category $category): Category
    {
        $category->update($data);
        return $category;
    }

    public function delete(Category $category): bool|null
    {
        return $category->delete();
    }

    public function main_latest_four()
    {
        return Cache::remember('project_category_four_main', 60*60*24, function(){
            return Category::with('project')->latest()
            ->limit(4)
            ->get()
            ->map(function ($query) {
                $query->setRelation('project', $query->project->where('is_draft', true)->take(3));
                return $query;
            });
        });
    }

    public function main_all()
    {
        return Cache::remember('project_main_all', 60*60*24, function(){
            return Category::with([
                'project' => function($q) {
                    $q->where('is_draft', true)->latest();
                },
            ])->latest()
            ->get();
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
