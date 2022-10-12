<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceThreeCreateRequest;
use App\Models\Sparepart;
use Illuminate\Support\Facades\Redirect;

class RequestServiceThreeStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RequestServiceThreeCreateRequest $request)
    {
        $data = $request->validated();
        try {
            Sparepart::create([
                'uuid' => $data['uuid'],
                'service_three_type' => $data['service_three_type'],
                'brand' => $data['brand'],
                'modal' => $data['modal'],
                'color' => $data['color'],
                'plate_number' => $data['plate_number'],
                'location_from' => $data['location_from'],
                'location_to' => $data['location_to'],
                'car_serial_number' => $data['car_serial_number'],
                'copy_of_regestration' => $data['copy_of_regestration'],
                'upload_photo' => $data['upload_photo'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('request.service.three.create')
            ->with('success', "Request Service three Successfully posted.");
    }
}
