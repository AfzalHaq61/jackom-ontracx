<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Fueltype;
use App\Models\Sell;
use App\Models\Transmissiontype;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
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
            'service_sellcars_type' => Sell::factory(),
            'category' => Category::factory(),
            'manufacturing_year' => $this->faker->randomNumber(),
            'regional_specification' => $this->faker->name(),
            'paint' => $this->faker->name(),
            'chasis_case' => $this->faker->name(),
            'kilo_meters' => $this->faker->randomNumber(),
            'color' => $this->faker->name(),
            'fuel_type' => Fueltype::factory(),
            'transmission_type' => Transmissiontype::factory(),
            'name' => $this->faker->name(),
            'description' => $this->faker->name(),
            'price' => $this->faker->randomNumber(),
            'location' => $this->faker->name(),
            'upload_photo' => $this->faker->name(),
        ];
    }
}