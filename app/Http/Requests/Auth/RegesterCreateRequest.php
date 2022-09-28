<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegesterCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        dd("hello");
        return [
            'uuid' => 'uuid',
            'first_name' => 'required|min:3|max:20|string',
            'last_name' => 'required|min:3|max:20|string',
            'country' => 'required|min:3|max:20|string',
            'city' => 'required|min:3|max:20|string',
            'contact_number' => 'required|min:11|max:20|number',
            'email' => 'email|min:7|max:30|string',
            'password' => 'required|min:3|max:8|alpha',
            'confirm_password' => 'required|same:password|min:3|max:8|alpha',
        ];
    }
}
