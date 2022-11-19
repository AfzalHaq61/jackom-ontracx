<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestServices\RequestServiceOneCreateRequest;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

        $file = $request->file('upload_photo');

        $destinationPath = 'images';
        $file->move($destinationPath, time() . '-' . $file->getClientOriginalName());

        $user_id = Auth::user()->id;

        try {
            Request::create([
                'uuid' => $data['uuid'],
                'user_id' => $user_id,
                'service_type' => $data['service_one_type'],
                'brand' => $data['brand'],
                'modal' => $data['modal'],
                'color' => $data['color'],
                'plate_number' => $data['plate_number'],
                'location' => $data['location_from'],
                'location_to' => $data['location_to'],
                'upload_photo' => time() . '-' . $file->getClientOriginalName(),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('user.request.index')
            ->with('success', "Request Service One Successfully posted.");
    }
}
