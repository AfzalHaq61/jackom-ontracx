<?php

namespace Database\Factories;

use App\Models\chat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Messege>
 */
class MessegeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'chat_id' => chat::factory(),
            'messege' => $this->faker->text(),
        ];
    }
}
