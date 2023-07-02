<?php

namespace App\Modules\ServicePage\AdditionalContent\Services;

use App\Modules\ServicePage\AdditionalContent\Models\AdditionalContentHeading;

class AdditionalContentHeadingService
{

    public function getByServiceId(Int $service_id): AdditionalContentHeading|null
    {
        return AdditionalContentHeading::where('service_id', $service_id)->first();
    }

    public function createOrUpdate(array $data, $service_id): AdditionalContentHeading
    {
        $additional_content_heading = AdditionalContentHeading::updateOrCreate(
            ['service_id' => $service_id],
            [...$data]
        );

        return $additional_content_heading;
    }

}
