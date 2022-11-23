<?php

namespace App\Http\Controllers\User\Payment;

use App\Http\Controllers\Controller;

class UserPaymentGetSessionController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function __invoke()
  {

    $stripe = new \Stripe\StripeClient(
      'sk_test_51M6qfdL4R5mzRCVIVhsMdu0wSaCXEFrotGhBJuYCHmMTAqg7IkRWfr8rLyI7hqEnkFcCMY5n4lRU6jWEJ8gwnBrK00zbK4saFh'
    );

    $product = $stripe->products->create([
      'name' => 'Gold Special',
    ]);

    $price = $stripe->prices->create([
      'unit_amount' => 2000,
      'currency' => 'usd',
      'recurring' => ['interval' => 'month'],
      'product' => $product->id,
    ]);

    $price_id = $price->id;

    $checkout = $stripe->checkout->sessions->create([
      'success_url' => 'http://127.0.0.1:8000/success',
      'cancel_url' => 'http://127.0.0.1:8000/user/wallet',
      'line_items' => [
        [
          'price' => $price_id,
          'quantity' => 3,
        ],
      ],
      'mode' => 'subscription',
    ]);

    return $checkout;
  }
}
