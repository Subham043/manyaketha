<?php

namespace App\Modules\ServicePage\AdditionalServiceContent\Requests;

use Illuminate\Support\Facades\Auth;

class AdditionalServiceContentUpdateRequest extends AdditionalServiceContentCreateRequest
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
            'name' => 'required|string',
            'description' => 'required|string',
            'description_unfiltered' => 'required|string',
            'image' => 'nullable|image|min:1|max:500',
        ];
    }

}
