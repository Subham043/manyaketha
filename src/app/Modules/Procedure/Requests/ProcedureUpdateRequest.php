<?php

namespace App\Modules\Procedure\Requests;

use Illuminate\Support\Facades\Auth;

class ProcedureUpdateRequest extends ProcedureCreateRequest
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
            'title' => 'required|string|max:250',
            'image' => 'nullable|image|min:10|max:500',
            'is_draft' => 'required|boolean',
        ];
    }

}
