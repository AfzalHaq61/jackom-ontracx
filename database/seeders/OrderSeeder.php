<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Order;
use App\Models\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
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
                Order::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'request_id' => $status['request_id'],
                        'offer_id' => $status['offer_id'],
                        'status' => $status['status']
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'uuid' => Str::uuid()->tostring(),
                'request_id' => Request::first()->id,
                'offer_id' => Offer::first()->id,
                'status' => false,
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'request_id' => Request::first()->id,
                'offer_id' => Offer::first()->id,
                'status' => false,
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'request_id' => Request::first()->id,
                'offer_id' => Offer::first()->id,
                'status' => false,
            ],
        ]);
    }
}
