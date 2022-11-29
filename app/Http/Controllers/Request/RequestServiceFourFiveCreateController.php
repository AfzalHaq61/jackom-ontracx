<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Models\Deportation;
use App\Models\Shippingtype;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RequestServiceFourFiveCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('User/Request/RequestServiceFourFive', [
            'deportations' => Deportation::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'shippingtypes' => Shippingtype::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'name' => Auth::user()->first_name,
        ])
            ->with('success_message', "Yay it worked");
    }
}
