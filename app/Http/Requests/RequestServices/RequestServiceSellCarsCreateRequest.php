<?php

namespace App\Http\Requests\RequestServices;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class RequestServiceSellCarsCreateRequest extends FormRequest
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
            'service_sellcars_type' => 'required|exists:sells,id',
            'category' => 'required|exists:categories,id',
            'manufacturing_year' => 'required|min:5|numeric',
            'regional_specification' => 'required|min:3|max:30|string',
            'paint' => 'required|min:3|max:30|string',
            'chasis_case' => 'required|min:3|max:30|string',
            'kilo_meters' => 'required|min:5|numeric',
            'color' => 'required|min:3|max:30|string',
            'fuel_type' => 'required|exists:fueltypes,id',
            'transmission_type' => 'required|exists:transmissiontypes,id',
            'name' => 'required|min:3|max:30|string',
            'description' => 'required|min:3|max:30|string',
            'price' => 'required|min:2|max:30|string',
            'location' => 'required|min:2|max:30|string',
            'upload_photo' => 'required|max:2048'
        ];
    }
}
