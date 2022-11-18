<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
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
            'request' => $request
        ])
            ->with('success_message', "Yay it worked");
    }
}
