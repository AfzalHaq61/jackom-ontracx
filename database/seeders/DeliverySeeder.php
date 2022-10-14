<?php

namespace Database\Seeders;

use App\Models\Delivery;
use App\Models\Household;
use App\Models\Kind;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeliverySeeder extends Seeder
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
                Delivery::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'service_six_type' => $status['service_six_type'],
                        'kind' => $status['kind'],
                        'my_location' => $status['my_location'],
                        'to_location' => $status['to_location'],
                        'upload_photo' => $status['upload_photo'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'uuid' => Str::uuid()->tostring(),
                'service_six_type' => Household::first()->id,
                'kind' => Kind::first()->id,
                'my_location' => 'peshawar',
                'to_location' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_six_type' => Household::first()->id,
                'kind' => Kind::first()->id,
                'my_location' => 'peshawar',
                'to_location' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_six_type' => Household::first()->id,
                'kind' => Kind::first()->id,
                'my_location' => 'peshawar',
                'to_location' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
        ]);
    }
}
