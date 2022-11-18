<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceFourFiveCreateRequest;
use App\Models\Buggage;
use App\Models\Request;
use Illuminate\Support\Facades\Redirect;

class RequestServiceFourFiveStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RequestServiceFourFiveCreateRequest $request)
    {
        $data = $request->validated();
        try {
            Buggage::create([
                'uuid' => $data['uuid'],
                'service_fourfive_type' => $data['service_fourfive_type'],
                'shipping_type' => $data['shipping_type'],
                'size' => $data['size'],
                'weight' => $data['weight'],
                'location_from' => $data['location_from'],
                'location_to' => $data['location_to'],
                'upload_photo' => $data['upload_photo'],
            ]);

            Request::create([
                'uuid' => $data['uuid'],
                'service_type' => $data['service_fourfive_type'],
                'shipping_type' => $data['shipping_type'],
                'size' => $data['size'],
                'weight' => $data['weight'],
                'location' => $data['location_from'],
                'location_to' => $data['location_to'],
                'upload_photo' => $data['upload_photo'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('user.request.index')
            ->with('success', "Request Service three Successfully posted.");
    }
}