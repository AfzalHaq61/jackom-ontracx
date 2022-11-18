<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Modal;
use App\Models\Spareparttype;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sparepart>
 */
class SparepartFactory extends Factory
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
            'service_three_type' => Spareparttype::factory(),
            'brand' => Brand::factory(),
            'modal' => Modal::factory(),
            'color' => $this->faker->name(),
            'location_from' => $this->faker->name(),
            'location_to' => $this->faker->name(),
            'car_serial_number' => $this->faker->randomNumber(),
            'copy_of_regestration' => $this->faker->randomNumber(),
            'upload_photo' => $this->faker->name(),
        ];
    }
}
