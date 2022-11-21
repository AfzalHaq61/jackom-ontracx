<?php

namespace Database\Factories;

use App\Models\chat;
use App\Models\User;
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
            'sender_id' => User::factory(),
            'reciever_id' => User::factory(),
            'messege' => $this->faker->text(),
            'to_user_id' => User::factory(),
            'from_user_id' => User::factory(),
        ];
    }
}
