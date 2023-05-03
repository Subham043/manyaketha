<?php

namespace App\Modules\ProjectPage\Category\Requests;


class CategoryUpdateRequest extends CategoryCreateRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:500|unique:project_categories,title,'.$this->route('id')
        ];
    }

}
