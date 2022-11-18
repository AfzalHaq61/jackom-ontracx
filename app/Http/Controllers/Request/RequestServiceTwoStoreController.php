<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceTwoCreateRequest;
use App\Models\Repairing;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
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

        $file = $request->file('upload_photo');

        $destinationPath = 'images';
        $file->move($destinationPath, time() . '-' . $file->getClientOriginalName());

        $user_id = Auth::user()->id;

        try {
            Repairing::create([
                'uuid' => $data['uuid'],
                'user_id' => $user_id,
                'service_two_type' => $data['service_two_type'],
                'brand' => $data['brand'],
                'modal' => $data['modal'],
                'color' => $data['color'],
                'plate_number' => $data['plate_number'],
                'location_from' => $data['location_from'],
                'upload_photo' => time() . '-' . $file->getClientOriginalName(),
            ]);

            Request::create([
                'uuid' => $data['uuid'],
                'user_id' => $user_id,
                'service_type' => $data['service_two_type'],
                'brand' => $data['brand'],
                'modal' => $data['modal'],
                'color' => $data['color'],
                'plate_number' => $data['plate_number'],
                'location' => $data['location_from'],
                'upload_photo' => time() . '-' . $file->getClientOriginalName(),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('user.request.index')
            ->with('success', "Request Service Two Successfully posted.");
    }
}
