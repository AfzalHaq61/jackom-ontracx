<?php

namespace Database\Factories;

use App\Models\Deportation;
use App\Models\Shippingtype;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buggage>
 */
class BuggageFactory extends Factory
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
            'service_fourfive_type' => Deportation::factory(),
            'shipping_type' => Shippingtype::factory(),
            'size' => $this->faker->randomNumber(),
            'weight' => $this->faker->randomNumber(),
            'location_from' => $this->faker->name(),
            'location_to' => $this->faker->name(),
            'upload_photo' => $this->faker->name(),
        ];
    }
}
