<?php

namespace Database\Factories;

use App\Models\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
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
            'user_id' => User::factory(),
            'service_cost' => $this->faker->randomNumber(),
            'due_time' => $this->faker->time(),
            'details' => $this->faker->randomNumber(),
        ];
    }
}
