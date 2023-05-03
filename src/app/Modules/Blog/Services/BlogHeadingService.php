<?php

namespace App\Modules\Blog\Services;

use App\Modules\Blog\Models\BlogHeading;
use Illuminate\Support\Facades\Cache;

class BlogHeadingService
{

    public function getById(Int $id): BlogHeading|null
    {
        return Cache::remember('blog_heading_'.$id, 60*60*24, function() use($id){
            return BlogHeading::where('id', $id)->first();
        });
    }

    public function createOrUpdate(array $data): BlogHeading
    {
        $blog_heading = BlogHeading::updateOrCreate(
            ['id' => 1],
            [...$data]
        );

        $blog_heading->user_id = auth()->user()->id;
        $blog_heading->save();

        return $blog_heading;
    }

}
