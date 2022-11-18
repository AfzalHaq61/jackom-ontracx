<?php

namespace App\Http\Requests\RequestServices;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class RequestServiceSixCreateRequest extends FormRequest
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
            'service_six_type' => 'required',
            'kind' => 'required',
            'my_location' => 'required|min:7|max:30|string',
            'to_location' => 'required|min:7|max:30|string',
            'upload_photo' => 'required|max:2048',
        ];
    }
}
