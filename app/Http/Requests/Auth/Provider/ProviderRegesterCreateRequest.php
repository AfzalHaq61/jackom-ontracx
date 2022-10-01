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
            'name' => 'required|max:20|string',
            'address' => 'required|max:20|string', 
            'mobile_number' => 'required|max:20|string',
            'registration_number' => 'required|max:20|string',
            'nationality' => 'required|max:20|string',
            'country' => 'required|max:20|string',
            'region' => 'required||max:20',
            'city' => 'required|max:20|string',
            'iban' => 'required|max:20|string', 
            'account_number' => 'required|max:20|string',
            'comercial_activity' => 'required|max:20|string', 
            'legal_capacity' => 'required|max:20|string',   
            'license_photo_1' => 'max:20|string', 
            'license_photo_2' => 'max:20|string', 
        ];
    }
}
