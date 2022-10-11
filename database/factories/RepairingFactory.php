<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Carwash;
use App\Models\Modal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Repairing>
 */
class RepairingFactory extends Factory
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
            'service_two_type' => Carwash::factory(),
            'brand' => Brand::factory(),
            'modal' => Modal::factory(),
            'color' => $this->faker->name(),
            'plate_number' => $this->faker->randomNumber(),
            'location_from' => $this->faker->name(),
            'upload_photo' => $this->faker->name(),
        ];
    }
}
