<?php

namespace App\Modules\ProjectPage\Category\Services;

use App\Http\Services\FileService;
use App\Modules\ProjectPage\Category\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
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

}

class CommonFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('title', 'LIKE', '%' . $value . '%');
    }
}
