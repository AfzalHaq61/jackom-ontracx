<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferCollection;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProviderOfferController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $query = Offer::query()
            ->where('user_id', Auth::user()->id)
            ->paginate('50');

        return Inertia::render('ProviderOffers', [
            'offers' => new OfferCollection($query),
            'name' => Auth::user()->first_name,
        ])->with('success_message', "Yay it worked");
    }
}
