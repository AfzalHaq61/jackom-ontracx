<?php

namespace App\Http\Controllers;

use App\Http\Requests\Provider\SendOfferCreateRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SendOfferStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SendOfferCreateRequest $request)
    {
        $data = $request->validated();

        $user_id = Auth::user()->id;

        try {
            Offer::create([
                'uuid' => $data['uuid'],
                'request_id' => $data['request_id'],
                'user_id' => $user_id,
                'service_cost' => $data['service_cost'],
                'due_time' => $data['due_time'],
                'details' => $data['details'],
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return Redirect::route('provider.offer')
            ->with('success', "Offer Successfully Created.");
    }
}
