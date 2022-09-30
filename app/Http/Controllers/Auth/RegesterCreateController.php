<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Inertia\Inertia;

class RegesterCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('Auth/User/Regester', [
            'countries' => Country::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ])
        ])->with('success_message', "Yay it worked");
    }
}
