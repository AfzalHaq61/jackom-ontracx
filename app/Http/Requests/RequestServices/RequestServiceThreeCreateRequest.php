<?php

namespace App\Http\Requests\RequestServices;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class RequestServiceThreeCreateRequest extends FormRequest
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
            'service_three_type' => 'required|exists:sparepartstypes,id',
            'brand' => 'required|exists:brands,id',
            'modal' => 'required|exists:modals,id',
            'color' => 'required|min:2|string',
            'plate_number' => 'required|min:5|numeric',
            'location_from' => 'required|min:7|max:30|string',
            'location_to' => 'required|min:7|max:30|string',
            'car_serial_number' => 'required|min:5|numeric',
            'copy_of_regestration' => 'required|min:5|numeric',
            'upload_photo' => 'required|max:2048',
        ];
    }
}
