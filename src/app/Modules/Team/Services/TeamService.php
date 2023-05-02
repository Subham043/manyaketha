<?php

namespace App\Modules\Team\Services;

use App\Http\Services\FileService;
use App\Modules\Team\Models\Team;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Spatie\QueryBuilder\AllowedFilter;

class TeamService
{

    public function all(): Collection
    {
        return Team::all();
    }

    public function paginate(Int $total = 10): LengthAwarePaginator
    {
        $query = Team::latest();
        return QueryBuilder::for($query)
                ->allowedFilters([
                    AllowedFilter::custom('search', new CommonFilter),
                ])
                ->paginate($total)
                ->appends(request()->query());
    }

    public function getById(Int $id): Team|null
    {
        return Team::findOrFail($id);
    }

    public function create(array $data): Team
    {
        $team = Team::create($data);
        $team->user_id = auth()->user()->id;
        $team->save();
        return $team;
    }

    public function update(array $data, Team $team): Team
    {
        $team->update($data);
        return $team;
    }

    public function saveImage(Team $team): Team
    {
        $this->deleteImage($team);
        $image = (new FileService)->save_file('image', (new Team)->image_path);
        return $this->update([
            'image' => $image,
        ], $team);
    }

    public function delete(Team $team): bool|null
    {
        $this->deleteImage($team);
        return $team->delete();
    }

    public function deleteImage(Team $team): void
    {
        if($team->image){
            $path = str_replace("storage","app/public",$team->image);
            (new FileService)->delete_file($path);
        }
    }

    public function main_all(): Collection
    {
        return Cache::remember('team_main', 60*60*24, function(){
            return Team::where('is_draft', true)->get();
        });
    }

}

class CommonFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('name', 'LIKE', '%' . $value . '%')
        ->orWhere('designation', 'LIKE', '%' . $value . '%');
    }
}
