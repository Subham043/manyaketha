<?php

namespace App\Modules\ProjectPage\Project\Services;

use App\Http\Services\FileService;
use App\Modules\ProjectPage\Project\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;

class ProjectService
{

    public function all(): Collection
    {
        return Project::all();
    }

    public function paginate(Int $total = 10): LengthAwarePaginator
    {
        $query = Project::with('category')->latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(Int $id): Project|null
    {
        return Project::findOrFail($id);
    }

    public function create(array $data): Project
    {
        $project = Project::create($data);
        $project->user_id = auth()->user()->id;
        $project->save();
        return $project;
    }

    public function update(array $data, Project $project): Project
    {
        $project->update($data);
        return $project;
    }

    public function saveImage(Project $project): Project
    {
        $this->deleteImage($project);
        $image = (new FileService)->save_file('image', (new Project)->image_path);
        return $this->update([
            'image' => $image,
        ], $project);
    }

    public function delete(Project $project): bool|null
    {
        $this->deleteImage($project);
        return $project->delete();
    }

    public function deleteImage(Project $project): void
    {
        if($project->image){
            $path = str_replace("storage","app/public",$project->image);
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
