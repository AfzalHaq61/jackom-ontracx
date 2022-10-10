<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class RequestServiceSixCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('Request/RequestServiceSix')
            ->with('success_message', "Yay it worked");
    }
}
