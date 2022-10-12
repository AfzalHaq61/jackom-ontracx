<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Modal;
use App\Models\Sparepart;
use App\Models\Spareparttype;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SparepartSeeder extends Seeder
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
                Sparepart::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'service_three_type' => $status['service_three_type'],
                        'brand' => $status['brand'],
                        'modal' => $status['modal'],
                        'color' => $status['color'],
                        'plate_number' => $status['plate_number'],
                        'location_from' => $status['location_from'],
                        'location_to' => $status['location_to'],
                        'car_serial_number' => $status['car_serial_number'],
                        'copy_of_regestration' => $status['copy_of_regestration'],
                        'upload_photo' => $status['upload_photo'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'uuid' => Str::uuid()->tostring(),
                'service_three_type' => Spareparttype::first()->id,
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'color' => 'red',
                'plate_number' => '12345',
                'location_from' => 'peshawar',
                'location_to' => 'malakand',
                'car_serial_number' => '45678',
                'copy_of_regestration' => '34567',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_three_type' => Spareparttype::first()->id,
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'color' => 'red',
                'plate_number' => '12345',
                'location_from' => 'peshawar',
                'location_to' => 'malakand',
                'car_serial_number' => '45678',
                'copy_of_regestration' => '34567',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_three_type' => Spareparttype::first()->id,
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'color' => 'red',
                'plate_number' => '12345',
                'location_from' => 'peshawar',
                'location_to' => 'malakand',
                'car_serial_number' => '45678',
                'copy_of_regestration' => '34567',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
        ]);
    }
}
