<?php

namespace App\Http\Controllers\User\Request;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferCollection;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserRequestDetailsController extends Controller
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
        return Inertia::render('User/UserRequestDetails', [
            'offer' => new OfferCollection($query),
            'name' => Auth::user()->first_name,
        ])
            ->with('success_message', "Yay it worked");
    }
}
