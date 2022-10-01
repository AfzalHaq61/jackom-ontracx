<?php

namespace App\Http\Controllers\Auth\Provider;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Nation;
use App\Models\Region;
use Inertia\Inertia;

class ProviderRegesterCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('Auth/Provider/ProviderRegester', [
            'countries' => Country::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'nations' => Nation::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'cities' => City::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'regions' => Region::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]) 
        ])->with('success_message', "Yay it worked");
    }
}
