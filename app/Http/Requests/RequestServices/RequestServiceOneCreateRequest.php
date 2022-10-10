<?php

namespace App\Http\Requests\RequestServices;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class RequestServiceOneCreateRequest extends FormRequest
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
            'service_one_type' => 'required|exists:towings,id',
            'brand' => 'required|exists:brands,id',
            'modal' => 'required|exists:modals,id',
            'color' => 'required|min:2|max:10|string',
            'plate_number' => 'required|min:5|max:20|numeric',
            'location_from' => 'required|min:7|max:30|string',
            'location_to' => 'required|min:7|max:30|string',
            'upload_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
