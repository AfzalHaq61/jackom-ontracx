<?php

namespace Database\Factories;

use App\Models\Household;
use App\Models\Kind;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
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
            'service_six_type' => Household::factory(),
            'kind' => Kind::factory(),
            'my_location' => $this->faker->name(),
            'to_location' => $this->faker->name(),
            'upload_photo' => $this->faker->name(),
        ];
    }
}
