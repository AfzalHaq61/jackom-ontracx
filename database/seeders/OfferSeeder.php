<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Request;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
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
                Offer::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'request_id' => $status['request_id'],
                        'user_id' => $status['user_id'],
                        'service_cost' => $status['service_cost'],
                        'due_time' => $status['due_time'],
                        'details' => $status['details'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'uuid' => Str::uuid()->tostring(),
                'request_id' => Request::first()->id,
                'user_id' => User::first()->id,
                'service_cost' => 22,
                'due_time' => '12:00:00',
                'details' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Inventore ratione, earum quidem velit culpa ad neque magni impedit cum autem harum,
                  veritatis libero voluptatum praesentium delectus, veniam aliquam amet numquam.",
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'request_id' => Request::first()->id,
                'user_id' => User::first()->id,
                'service_cost' => 23,
                'due_time' => '11:00:00',
                'details' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Inventore ratione, earum quidem velit culpa ad neque magni impedit cum autem harum,
                  veritatis libero voluptatum praesentium delectus, veniam aliquam amet numquam.",
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'request_id' => Request::first()->id,   
                'user_id' => User::first()->id,
                'service_cost' => 24,
                'due_time' => '10:00:00',
                'details' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Inventore ratione, earum quidem velit culpa ad neque magni impedit cum autem harum,
                  veritatis libero voluptatum praesentium delectus, veniam aliquam amet numquam.",
            ],
        ]);
    }
}
