<?php

namespace App\Modules\ServicePage\AdditionalContent\Requests;

use Illuminate\Support\Facades\Auth;

class AdditionalContentUpdateRequest extends AdditionalContentCreateRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description' => 'required|string',
            'description_unfiltered' => 'required|string',
            'image' => 'nullable|image|min:1|max:500',
        ];
    }

}
