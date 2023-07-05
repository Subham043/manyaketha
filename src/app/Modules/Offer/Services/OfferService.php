<?php

namespace App\Modules\Offer\Services;

use App\Modules\Offer\Models\Offer;

class OfferService
{

    public function getById(Int $id): Offer|null
    {
        return Offer::where('id', $id)->first();
    }

    public function createOrUpdate(array $data): Offer
    {
        $about = Offer::updateOrCreate(
            ['id' => 1],
            [...$data]
        );

        $about->user_id = auth()->user()->id;
        $about->save();

        return $about;
    }

}
