<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelsRequest;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserRequestIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('UserRequest', [
            'requests' => ModelsRequest::all()->where('user_id', Auth::user()->id),
            'name' => Auth::user()->first_name,
        ])->with('success_message', "Yay it worked");
    }
}
