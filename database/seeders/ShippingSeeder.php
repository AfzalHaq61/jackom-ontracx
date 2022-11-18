<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Modal;
use App\Models\Shipping;
use App\Models\Towing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ShippingSeeder extends Seeder
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
                Shipping::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'service_one_type' => $status['service_one_type'],
                        'brand' => $status['brand'],
                        'modal' => $status['modal'],
                        'color' => $status['color'],
                        'plate_number' => $status['plate_number'],
                        'copy_of_regestration' => $status['copy_of_regestration'],
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
                'service_one_type' => Towing::first()->id,
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'color' => 'red',
                'plate_number' => '12345',
                'copy_of_regestration' => '34567',
                'location_from' => 'peshawar',
                'location_to' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_one_type' => Towing::first()->id,
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'color' => 'yellow',
                'plate_number' => '54321',
                'copy_of_regestration' => '34567',
                'location_from' => 'malakand',
                'location_to' => 'Dohbighat',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_one_type' => Towing::first()->id,
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'color' => 'green',
                'plate_number' => '98765',
                'copy_of_regestration' => '34567',
                'location_from' => 'kalam',
                'location_to' => 'mardan',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
        ]);
    }
}
