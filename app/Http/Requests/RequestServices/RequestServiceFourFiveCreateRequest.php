<?php

namespace App\Http\Requests\RequestServices;
use Illuminate\Support\Str;

use Illuminate\Foundation\Http\FormRequest;

class RequestServiceFourFiveCreateRequest extends FormRequest
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
            'service_fourfive_type' => 'required|exists:deportations,id',
            'shipping_type' => 'required|exists:shippingtypes,id',
            'size' => 'required|numeric',
            'weight' => 'required|numeric',
            'location_from' => 'required|min:7|max:30|string',
            'location_to' => 'required|min:7|max:30|string',
            'upload_photo' => 'required|max:2048',
        ];
    }
}
