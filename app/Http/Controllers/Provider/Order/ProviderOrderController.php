<?php

namespace App\Http\Controllers\Provider\Order;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderCollection;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProviderOrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $query = Order::query()
            ->paginate('50');

        return Inertia::render('ProviderOrders', [
            'orders' => new OrderCollection($query),
            'name' => Auth::user()->first_name,
        ])->with('success_message', "Yay it worked");
    }
}
