<?php

namespace App\Modules\HomePage\BannerVideo\Services;

use App\Modules\HomePage\BannerVideo\Models\BannerVideo;

class BannerVideoService
{

    public function getById(Int $id): BannerVideo|null
    {
        return BannerVideo::where('id', $id)->first();
    }

    public function createOrUpdate(array $data): BannerVideo
    {
        $about = BannerVideo::updateOrCreate(
            ['id' => 1],
            [...$data]
        );

        $about->user_id = auth()->user()->id;
        $about->save();

        return $about;
    }

}
