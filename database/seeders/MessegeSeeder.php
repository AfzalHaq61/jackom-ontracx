<?php

namespace Database\Seeders;

use App\Models\chat;
use App\Models\Messege;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class MessegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data()
            ->each(function ($status) {
                Messege::factory()
                    ->create([
                        'chat_id' => $status['chat_id'],
                        'sender_id' => $status['sender_id'],
                        'reciever_id' => $status['reciever_id'],
                        'messege' => $status['messege'],
                        'to_user_id' => User::first()->id,
                        'from_user_id' => $status['from_user_id'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'chat_id' => chat::first()->id,
                'sender_id' => User::first()->id,
                'reciever_id' => User::first()->id,
                'messege' => 'Hello How are you',
                'to_user_id' => User::first()->id,
                'from_user_id' => User::first()->id,
            ],
            [
                'chat_id' => chat::first()->id,
                'sender_id' => User::first()->id,
                'reciever_id' => User::first()->id,
                'messege' => 'Hello How are you',
                'to_user_id' => User::first()->id,
                'from_user_id' => User::first()->id,
            ],
        ]);
    }
}
