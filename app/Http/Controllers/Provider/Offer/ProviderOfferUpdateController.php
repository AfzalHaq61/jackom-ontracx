<?php

namespace App\Http\Controllers\Provider\Offer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Provider\SendOfferCreateRequest;
use App\Models\Offer;
use Illuminate\Support\Facades\Redirect;

class ProviderOfferUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Offer $offer, SendOfferCreateRequest $request)
    {
        $offer->uuid = $request->uuid;
        $offer->request_id = $request->request_id;
        $offer->user_id = $request->user_id;
        $offer->service_cost = $request->service_cost;
        $offer->due_time = $request->due_time;
        $offer->details = $request->details;

        $offer->save();

        return Redirect::route('provider.offer')
            ->with('success', "Offer successfully updated.");
    }
}
