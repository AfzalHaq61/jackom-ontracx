<?php

namespace App\Http\Controllers;

use App\Http\Resources\OfferCollection;
use App\Models\Offer;
use Inertia\Inertia;

class PaymentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Offer $offer)
    {
        $query = Offer::query()
            ->where('id', $offer['id'])
            ->paginate('50');
        return Inertia::render('Payment', [
            'offer' => new OfferCollection($query),
        ])
            ->with('success_message', "Yay it worked");
    }
}
