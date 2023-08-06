<?php

namespace App\Modules\Campaign\Gallery\Requests;


class GalleryUpdateRequest extends GalleryCreateRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'is_draft' => 'required|boolean',
            'image' => 'nullable|image|min:1|max:500',
            'image_title' => 'required|string|max:500',
        ];
    }

}
