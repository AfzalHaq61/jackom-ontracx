<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderCollection;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserOrderController extends Controller
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

        return Inertia::render('User/UserOrder', [
            'orders' => new OrderCollection($query),
        ])
            ->with('success_message', "Yay it worked");
    }
}
