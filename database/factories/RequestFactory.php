<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Fueltype;
use App\Models\Kind;
use App\Models\Modal;
use App\Models\Service;
use App\Models\Shippingtype;
use App\Models\Transmissiontype;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request>
 */
class RequestFactory extends Factory
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
            'user_id' => User::factory(),
            'service_type' => $this->faker->name(),
            'name' => $this->faker->name(),
            'description' => $this->faker->name(),
            'price' => $this->faker->randomNumber(),
            'brand' => Brand::factory(),
            'modal' => Modal::factory(),
            'shipping_type' => Shippingtype::factory(),
            'kind' => Kind::factory(),
            'category' => Category::factory(),
            'size' => $this->faker->randomNumber(),
            'weight' => $this->faker->randomNumber(),
            'color' => $this->faker->name(),
            'plate_number' => $this->faker->randomNumber(),
            'car_serial_number' => $this->faker->randomNumber(),
            'copy_of_regestration' => $this->faker->randomNumber(),
            'manufacturing_year' => $this->faker->randomNumber(),
            'regional_specification' => $this->faker->name(),
            'paint' => $this->faker->name(),
            'chasis_case' => $this->faker->name(),
            'kilo_meters' => $this->faker->randomNumber(),
            'fuel_type' => Fueltype::factory(),
            'transmission_type' => Transmissiontype::factory(),
            'location' => $this->faker->name(),
            'location_to' => $this->faker->name(),
            'upload_photo' => $this->faker->name(),
        ];
    }
}
