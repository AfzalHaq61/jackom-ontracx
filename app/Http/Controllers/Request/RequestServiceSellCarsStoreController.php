<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceSellCarsCreateRequest;
use App\Models\Car;
use Illuminate\Support\Facades\Redirect;

class RequestServiceSellCarsStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RequestServiceSellCarsCreateRequest $request)
    {
        $data = $request->validated();
        try {
            Car::create([
                'uuid' => $data['uuid'],
                'service_sellcars_type' => $data['service_sellcars_type'],
                'category' => $data['category'],
                'manufacturing_year' => $data['manufacturing_year'],
                'regional_specification' => $data['regional_specification'],
                'paint' => $data['paint'],
                'chasis_case' => $data['chasis_case'],
                'kilo_meters' => $data['kilo_meters'],
                'color' => $data['color'],
                'fuel_type' => $data['fuel_type'],
                'transmission_type' => $data['transmission_type'],
                'name' => $data['name'],
                'description' => $data['description'],
                'price' => $data['price'],
                'location' => $data['location'],
                'upload_photo' => $data['upload_photo'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('request.service.sell-car.create')
            ->with('success', "Request Service three Successfully posted.");
    }
}
