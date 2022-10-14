<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceSixCreateRequest;
use App\Models\Delivery;
use Illuminate\Support\Facades\Redirect;

class RequestServiceSixStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RequestServiceSixCreateRequest $request)
    {
        
        $data = $request->validated();
        try {
            Delivery::create([
                'uuid' => $data['uuid'],
                'service_six_type' => $data['service_six_type'],
                'kind' => $data['kind'],
                'my_location' => $data['my_location'],
                'to_location' => $data['to_location'],
                'upload_photo' => $data['upload_photo'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('request.service.six.create')
            ->with('success', "Request Service three Successfully posted.");
    }
}
