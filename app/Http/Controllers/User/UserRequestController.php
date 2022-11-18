<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
        return Inertia::render('User/UserRequest&Offer', [
            'requests' => Request::all()->where('user_id', Auth::user()->id),
            'offers' => Offer::all()->where('request_id', request('request')),
        ])->with('success_message', "Yay it worked");
    }
}
