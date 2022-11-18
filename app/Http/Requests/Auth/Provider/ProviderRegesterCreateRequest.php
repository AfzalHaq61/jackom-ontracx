<?php

namespace App\Http\Requests\Auth\Provider;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ProviderRegesterCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function prepareForValidation()
    {
        $method = request()->method();
        if($method == 'POST') {
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
            'email' => 'required|email|min:7|max:30|string',
            'password' => 'required|min:3|max:20',
            'confirm_password' => 'required|same:password|min:3|max:20',
            'address' => 'required|min:7|max:30|string', 
            'mobile_number' => 'required|numeric',
            'registration_number' => 'required|numeric',
            'nationality' => 'required',
            'country' => 'required',
            'region_id' => 'required',
            'city_id' => 'required',
            'iban' => 'required|numeric', 
            'account_number' => 'required|numeric',
            'comercial_activity' => 'required|min:5|max:20|string', 
            'legal_capacity' => 'required|min:5|max:20|string',   
            'license_photo_1' => 'required|max:2048', 
            'license_photo_2' => 'required|max:2048',
            'upload_photo' => 'required|max:2048',
            'checkbox' => 'accepted'
        ];
    }
}
