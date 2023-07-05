<?php

namespace App\Modules\CallToAction\Services;

use App\Modules\CallToAction\Models\CallToAction;

class CallToActionService
{

    public function getById(Int $id): CallToAction|null
    {
        return CallToAction::where('id', $id)->first();
    }

    public function createOrUpdate(array $data): CallToAction
    {
        $about = CallToAction::updateOrCreate(
            ['id' => 1],
            [...$data]
        );

        $about->user_id = auth()->user()->id;
        $about->save();

        return $about;
    }

}
