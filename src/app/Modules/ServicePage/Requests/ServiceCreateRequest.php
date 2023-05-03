<?php

namespace App\Modules\ServicePage\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Purify\Facades\Purify;


class ServiceCreateRequest extends FormRequest
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
            'name' => 'required|string|max:500',
            'slug' => 'required|string|max:500|unique:services,slug',
            'heading' => 'required|string|max:500',
            'description' => 'required|string',
            'description_unfiltered' => 'required|string',
            'image' => 'required|image|min:1|max:5000',
            'brochure' => 'nullable|mimes:pdf|min:10|max:5000',
            'is_draft' => 'required|boolean',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_header_script' => 'nullable|string',
            'meta_footer_script' => 'nullable|string',
            'meta_header_no_script' => 'nullable|string',
            'meta_footer_no_script' => 'nullable|string',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'is_draft' => 'Draft',
        ];
    }

    /**
     * Handle a passed validation attempt.
     *
     * @return void
     */
    protected function passedValidation()
    {
        $request = Purify::clean(
            $this->except(['meta_header_script', 'meta_footer_script', 'meta_header_no_script', 'meta_footer_no_script'])
        );
        $this->replace(
            [...$request, ...$this->only(['meta_header_script', 'meta_footer_script', 'meta_header_no_script', 'meta_footer_no_script'])]
        );
    }
}
