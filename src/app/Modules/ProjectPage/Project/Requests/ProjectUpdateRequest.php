<?php

namespace App\Modules\ProjectPage\Project\Requests;


class ProjectUpdateRequest extends ProjectCreateRequest
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
            'category_id' => 'required|numeric|exists:project_categories,id',
        ];
    }

}
