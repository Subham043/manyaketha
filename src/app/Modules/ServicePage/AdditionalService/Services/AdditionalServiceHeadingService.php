<?php

namespace App\Modules\ServicePage\AdditionalService\Services;

use App\Modules\ServicePage\AdditionalService\Models\AdditionalServiceHeading;

class AdditionalServiceHeadingService
{

    public function getByServiceId(Int $service_id): AdditionalServiceHeading|null
    {
        return AdditionalServiceHeading::where('service_id', $service_id)->first();
    }

    public function createOrUpdate(array $data, $service_id): AdditionalServiceHeading
    {
        $additional_content_heading = AdditionalServiceHeading::updateOrCreate(
            ['service_id' => $service_id],
            [...$data]
        );

        return $additional_content_heading;
    }

}
