<?php

namespace Database\Seeders;

use App\Models\Buggage;
use App\Models\Deportation;
use App\Models\Shippingtype;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BuggageSeeder extends Seeder
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
                Buggage::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'service_fourfive_type' => $status['service_fourfive_type'],
                        'shipping_type' => $status['shipping_type'],
                        'size' => $status['size'],
                        'weight' => $status['weight'],
                        'location_from' => $status['location_from'],
                        'location_to' => $status['location_to'],
                        'upload_photo' => $status['upload_photo'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'uuid' => Str::uuid()->tostring(),
                'service_fourfive_type' => Deportation::first()->id,
                'shipping_type' => Shippingtype::first()->id,
                'size' => '13',
                'weight' => '60',
                'location_from' => 'peshawar',
                'location_to' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_fourfive_type' => Deportation::first()->id,
                'shipping_type' => Shippingtype::first()->id,
                'size' => '13',
                'weight' => '60',
                'location_from' => 'peshawar',
                'location_to' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_fourfive_type' => Deportation::first()->id,
                'shipping_type' => Shippingtype::first()->id,
                'size' => '13',
                'weight' => '60',
                'location_from' => 'peshawar',
                'location_to' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
        ]);
    }
}
