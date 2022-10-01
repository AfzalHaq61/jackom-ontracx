<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class UserForgotPasswordCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('Auth/User/ForgotPassword')
            ->with('success_message', "Yay it worked");
    }
}
