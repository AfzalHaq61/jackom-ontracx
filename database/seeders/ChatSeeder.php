<?php

namespace Database\Seeders;

use App\Models\chat;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class ChatSeeder extends Seeder
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
                chat::factory()
                    ->create([
                        'reciever_id' => $status['reciever_id'],
                        'sender_id' => $status['sender_id'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'reciever_id' => User::first()->id,
                'sender_id' => User::first()->id,
            ],
            [
                'reciever_id' => User::first()->id,
                'sender_id' => User::first()->id,
            ],
        ]);
    }
}
