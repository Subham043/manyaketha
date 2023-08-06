<?php

namespace App\Modules\Campaign\Faq\Requests;


class FaqUpdateRequest extends FaqCreateRequest
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
            'question' => 'required|string|max:500',
            'answer' => 'required|string',
        ];
    }

}
