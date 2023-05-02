<?php

namespace App\Modules\Team\Services;

use App\Modules\Team\Models\TeamHeading;
use Illuminate\Support\Facades\Cache;

class TeamHeadingService
{

    public function getById(Int $id): TeamHeading|null
    {
        return Cache::remember('team_heading_main_'.$id, 60*60*24, function() use($id){
            return TeamHeading::where('id', $id)->first();
        });
    }

    public function createOrUpdate(array $data): TeamHeading
    {
        $team_heading = TeamHeading::updateOrCreate(
            ['id' => 1],
            [...$data]
        );

        $team_heading->user_id = auth()->user()->id;
        $team_heading->save();

        return $team_heading;
    }

}
