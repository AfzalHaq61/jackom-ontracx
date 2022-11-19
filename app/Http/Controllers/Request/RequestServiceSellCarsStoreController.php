<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceSellCarsCreateRequest;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
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

        $file = $request->file('upload_photo');

        $destinationPath = 'images';
        $file->move($destinationPath, time() . '-' . $file->getClientOriginalName());

        $user_id = Auth::user()->id;

        try {
            Request::create([
                'uuid' => $data['uuid'],
                'user_id' => $user_id,
                'service_type' => $data['service_sellcars_type'],
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
                'upload_photo' => time() . '-' . $file->getClientOriginalName(),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('user.request.index')
            ->with('success', "Request Service Sell Cars Successfully posted.");
    }
}
