<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceTwoCreateRequest;
use App\Models\Repairing;
use Illuminate\Support\Facades\Redirect;

class RequestServiceTwoStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RequestServiceTwoCreateRequest $request)
    {
        $data = $request->validated();
        try {
            Repairing::create([
                'uuid' => $data['uuid'],
                'service_two_type' => $data['service_two_type'],
                'brand' => $data['brand'],
                'modal' => $data['modal'],
                'color' => $data['color'],
                'plate_number' => $data['plate_number'],
                'location_from' => $data['location_from'],
                'upload_photo' => $data['upload_photo'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('request.service.two.create')
            ->with('success', "Request Service Two Successfully posted.");
    }
}
