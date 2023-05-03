<?php

namespace App\Modules\Team\Requests;

use Illuminate\Support\Facades\Auth;

class TeamUpdateRequest extends TeamCreateRequest
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
            'name' => 'required|string|max:250',
            'designation' => 'required|string|max:250',
            'image' => 'nullable|image|min:1|max:500',
            'facebook' => 'nullable|url|max:250',
            'instagram' => 'nullable|url|max:250',
            'linkedin' => 'nullable|url|max:250',
            'is_draft' => 'required|boolean',
        ];
    }

}
