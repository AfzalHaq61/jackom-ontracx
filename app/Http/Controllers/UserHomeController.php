<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Inertia\Inertia;

class UserHomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('User/UserHome')->with('success_message', "Yay it worked");
    }
}
