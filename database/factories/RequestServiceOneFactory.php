<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RequestServiceOneFactory extends Factory
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
            'name' => $this->faker->name(),
            'address' => $this->faker->name(),
            'mobile_number' => $this->faker->randomNumber(),
            'registration_number' => $this->faker->randomNumber(),
            'nationality' => Nation::factory(),
            'country' => Country::factory(),
            'region' => Region::factory(),
            'city' => City::factory(),
            'iban' => $this->faker->randomNumber(),
            'account_number' => $this->faker->randomNumber(),
            'comercial_activity' => $this->faker->name(),
            'legal_capacity' => $this->faker->name(),
            'license_photo_1' => $this->faker->name(),
            'license_photo_2' => $this->faker->name(),
            'upload_photo' => $this->faker->name(),
        ];
    }
}
