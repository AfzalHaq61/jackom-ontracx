<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Modal;
use App\Models\Towing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
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
            'service_one_type' => Towing::factory(),
            'brand' => Brand::factory(),
            'modal' => Modal::factory(),
            'color' => $this->faker->name(),
            'plate_number' => $this->faker->randomNumber(),
            'location_from' => $this->faker->name(),
            'location_to' => $this->faker->name(),
            'upload_photo' => $this->faker->name(),
        ];
    }
}
