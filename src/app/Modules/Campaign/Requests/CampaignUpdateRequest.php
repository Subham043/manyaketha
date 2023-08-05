<?php

namespace App\Modules\Campaign\Requests;

class CampaignUpdateRequest extends CampaignCreateRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:500',
            'slug' => 'required|string|max:500|unique:services,slug,'.$this->route('id'),
            'heading' => 'required|string|max:500',
            'description' => 'required|string',
            'description_unfiltered' => 'required|string',
            'banner_image' => 'nullable|image|max:5000',
            'about_image' => 'nullable|image|max:5000',
            'header_logo' => 'nullable|image|max:5000',
            'footer_logo' => 'nullable|image|max:5000',
            'address' => 'required|string',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric|digits:10',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'facebook' => 'nullable|url',
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

}
