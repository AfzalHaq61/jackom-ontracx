<?php

namespace App\Http\Controllers\Provider\Offer;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProviderOfferEditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Offer $offer)
    {
        return Inertia::render('Provider/Offer/ProviderOfferEdit', [
            'offer' => $offer,
            'name' => Auth::user()->first_name,
        ])
            ->with('success_message', "Yay it worked");
    }
}
