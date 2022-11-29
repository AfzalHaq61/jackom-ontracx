<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderCollection;
use App\Models\Order;
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

        return Inertia::render('UserOrder', [
            'orders' => new OrderCollection($query),
            'name' => Auth::user()->first_name,
        ])
            ->with('success_message', "Yay it worked");
    }
}
