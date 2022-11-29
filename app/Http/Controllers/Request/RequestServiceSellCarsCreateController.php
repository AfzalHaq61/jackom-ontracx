<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Fueltype;
use App\Models\Sell;
use App\Models\Transmissiontype;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RequestServiceSellCarsCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return Inertia::render('User/Request/RequestServiceSellCars', [
            'sells' => Sell::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'categories' => Category::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'fueltypes' => Fueltype::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'transmissiontypes' => Transmissiontype::all()
                ->map(fn ($resource) => [
                    'id' => $resource->id,
                    'name' => $resource->name,
                ]),
            'name' => Auth::user()->first_name,
        ])
            ->with('success_message', "Yay it worked");
    }
}
