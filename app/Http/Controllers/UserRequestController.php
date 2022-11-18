<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Request as ModelsRequest;
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
        return Inertia::render('User/UserRequest', [
            'requests' => ModelsRequest::all()->where('user_id', Auth::user()->id),
            'offers' => Offer::all(),
        ])->with('success_message', "Yay it worked");
    }
}
