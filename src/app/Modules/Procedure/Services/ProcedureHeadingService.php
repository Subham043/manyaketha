<?php

namespace App\Modules\Procedure\Services;

use App\Modules\Procedure\Models\ProcedureHeading;
use Illuminate\Support\Facades\Cache;

class ProcedureHeadingService
{

    public function getById(Int $id): ProcedureHeading|null
    {
        return Cache::remember('procedure_heading_'.$id, 60*60*24, function() use($id){
            return ProcedureHeading::where('id', $id)->first();
        });
    }

    public function createOrUpdate(array $data): ProcedureHeading
    {
        $procedure_heading = ProcedureHeading::updateOrCreate(
            ['id' => 1],
            [...$data]
        );

        $procedure_heading->user_id = auth()->user()->id;
        $procedure_heading->save();

        return $procedure_heading;
    }

}
