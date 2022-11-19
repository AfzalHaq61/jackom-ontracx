<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceSixCreateRequest;
use App\Models\Delivery;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
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

        $file = $request->file('upload_photo');

        $destinationPath = 'images';
        $file->move($destinationPath, time() . '-' . $file->getClientOriginalName());

        $user_id = Auth::user()->id;

        try {
            Request::create([
                'uuid' => $data['uuid'],
                'user_id' => $user_id,
                'service_type' => $data['service_six_type'],
                'kind' => $data['kind'],
                'location' => $data['my_location'],
                'location_to' => $data['to_location'],
                'upload_photo' => time() . '-' . $file->getClientOriginalName(),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('user.request.index')
            ->with('success', "Request Service Six Successfully posted.");
    }
}
