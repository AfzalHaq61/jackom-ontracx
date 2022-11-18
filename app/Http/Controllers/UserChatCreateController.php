<?php

namespace App\Http\Controllers;

use App\Models\Messege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserChatCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('User/UserChat', [
            'user' => Auth::user(),
            'messeges' => Messege::with(['user'])->get(),
        ])
            ->with('success_message', "Yay it worked");
    }
}
