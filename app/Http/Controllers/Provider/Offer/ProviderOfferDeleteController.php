<?php

namespace App\Http\Controllers\Provider\Offer;

use App\Http\Controllers\Controller;
use App\Models\Offer;

class ProviderOfferDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Offer $offer)
    {
        $offer->delete();

        return Redirect()
            ->back()
            ->with('success', "Offer successfully deleted.");
    }
}
