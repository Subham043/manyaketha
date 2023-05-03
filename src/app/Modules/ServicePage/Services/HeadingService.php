<?php

namespace App\Modules\ServicePage\Services;

use App\Modules\ServicePage\Models\ServiceHeading;
use Illuminate\Support\Facades\Cache;

class HeadingService
{

    public function getById(Int $id): ServiceHeading|null
    {
        return Cache::remember('service_heading_'.$id, 60*60*24, function() use($id){
            return ServiceHeading::where('id', $id)->first();
        });
    }

    public function createOrUpdate(array $data): ServiceHeading
    {
        $service_heading = ServiceHeading::updateOrCreate(
            ['id' => 1],
            [...$data]
        );

        $service_heading->user_id = auth()->user()->id;
        $service_heading->save();

        return $service_heading;
    }

}
