<?php

namespace App\Http\Controllers\User\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class UserOrderUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Order $order)
    {
        $order->status = true;

        $order->save();

        return Redirect()
            ->back()
            ->with('success', "Order successfully completed.");
    }
}
