<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\Request;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid(),
            'request_id' => Request::factory(),
            'offer_id' => Offer::factory(),
            'status' => $this->faker->boolean(),
        ];
    }
}
