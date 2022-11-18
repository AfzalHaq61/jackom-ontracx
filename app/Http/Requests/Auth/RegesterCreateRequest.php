<?php

namespace App\Http\Requests\Auth;

use Illuminate\Support\Str;

use Illuminate\Foundation\Http\FormRequest;

class RegesterCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function prepareForValidation()
    {
        $method = request()->method();
        if ($method == 'POST') {
            $this->merge([
                'uuid' => Str::uuid()->toString(),
            ]);
        }
    }

    public function rules()
    {
        return [
            'uuid' => 'required|uuid',
            'first_name' => 'required|min:3|max:20|string',
            'last_name' => 'required|min:3|max:20|string',
            'region_id' => 'required',
            'city_id' => 'required',
            'contact_number' => 'required|min:11|numeric',
            'email' => 'email|min:7|max:30|string',
            'password' => 'min:3|max:20',
            'confirm_password' => 'same:password|min:3|max:20',
            'checkbox' => 'accepted'
        ];
    }
}
