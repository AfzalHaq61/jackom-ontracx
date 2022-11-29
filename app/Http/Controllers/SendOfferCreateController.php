<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SendOfferCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ModelsRequest $request)
    {
        return Inertia::render('Provider/Offer/ProviderOfferCreate', [
            'request' => $request,
            'provider_id' => Auth::user()->id,
            'name' => Auth::user()->first_name,
        ])
            ->with('success_message', "Yay it worked");
    }
}
