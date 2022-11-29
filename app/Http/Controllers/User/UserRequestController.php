<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferCollection;
use App\Models\Offer;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserRequestController extends Controller
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
            ->where('request_id', request('request'))
            ->paginate('50');

        return Inertia::render('User/UserRequest&Offer', [
            'requests' => Request::all()->where('user_id', Auth::user()->id),
            'offers' => new OfferCollection($query),
            'name' => Auth::user()->first_name,
        ])->with('success_message', "Yay it worked");
    }
}
