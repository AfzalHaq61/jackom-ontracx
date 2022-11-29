<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserWalletController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return Inertia::render('User/UserWallet', [
            'requests' => ModelsRequest::all()->where('user_id', Auth::user()->id),
            'offers' => Offer::all()->where('request_id', request('request'))
        ])->with('success_message', "Yay it worked");
    }
}
