<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Models\Household;
use App\Models\Kind;
use Illuminate\Support\Facades\Auth;
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
        return Inertia::render('User/Request/RequestServiceSix', [
            'households' => Household::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'kinds' => Kind::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'name' => Auth::user()->first_name,
        ])
            ->with('success_message', "Yay it worked");
    }
}
