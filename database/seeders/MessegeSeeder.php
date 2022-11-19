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
                        'messege' => $status['messege'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'chat_id' => chat::first()->id,
                'messege' => 'Hello How are you',
            ],
            [
                'chat_id' => chat::first()->id,
                'messege' => 'Hello How are you',
            ],
        ]);
    }
}
