<?php

namespace App\Modules\Feature\Services;

use App\Modules\Feature\Models\FeatureHeading;
use Illuminate\Support\Facades\Cache;

class FeatureHeadingService
{

    public function getById(Int $id): FeatureHeading|null
    {
        return Cache::remember('feature_heading_'.$id, 60*60*24, function() use($id){
            return FeatureHeading::where('id', $id)->first();
        });
    }

    public function createOrUpdate(array $data): FeatureHeading
    {
        $feature_heading = FeatureHeading::updateOrCreate(
            ['id' => 1],
            [...$data]
        );

        $feature_heading->user_id = auth()->user()->id;
        $feature_heading->save();

        return $feature_heading;
    }

}
