<?php

namespace App\Http\Requests\User\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'uuid' => 'required|uuid',
            'first_name' => 'required|min:3|max:20|string',
            'last_name' => 'required|min:3|max:20|string',
            'region_id' => 'required',
            'city_id' => 'required',
            'contact_number' => 'required|min:11|numeric',
            'password' => 'required',
            'email' => 'email|min:7|max:30|string',
        ];
    }
}
