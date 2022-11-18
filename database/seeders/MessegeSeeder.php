<?php

namespace Database\Seeders;

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
                        'user_id' => $status['user_id'],
                        'messege' => $status['messege'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'user_id' => User::first()->id,
                'messege' => 'Hello How are you',
            ],
            [
                'user_id' => User::first()->id,
                'messege' => 'Hello How are you',
            ],
        ]);
    }
}
