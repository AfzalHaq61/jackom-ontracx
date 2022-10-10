<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceOneCreateRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class RequestServiceOneStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RequestServiceOneCreateRequest $request)
    {
        $data = $request->validated();
        try {
            User::create([
                'uuid' => $data['uuid'],
                'service_one_type' => $data['service_one_type'],
                'brand' => $data['brand'],
                'modal' => $data['modal'],
                'color' => $data['color'],
                'plate_number' => $data['plate_number'],
                'location_from' => $data['location_from'],
                'location_to' => $data['location_to'],
                'upload_photo' => $data['upload_photo'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect(RouteServiceProvider::HOME)
            ->with('success', "User Successfully created.");
    }
}
