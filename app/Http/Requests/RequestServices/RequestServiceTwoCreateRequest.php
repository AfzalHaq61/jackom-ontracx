<?php

namespace App\Http\Requests\RequestServices;
use Illuminate\Support\Str;

use Illuminate\Foundation\Http\FormRequest;

class RequestServiceTwoCreateRequest extends FormRequest
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
            'service_two_type' => 'required|exists:carwashes,id',
            'brand' => 'required|exists:brands,id',
            'modal' => 'required|exists:modals,id',
            'color' => 'required|min:2|string',
            'plate_number' => 'required|min:5|numeric',
            'location_from' => 'required|min:7|max:30|string',
            'upload_photo' => 'required|max:2048',
        ];
    }
}
