<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProviderRequestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('Provider/ProviderRequest', [
            'requests' => Request::all()
        ])->with('success_message', "Yay it worked");
    }
}
