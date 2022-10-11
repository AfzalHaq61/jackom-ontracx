<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Carwash;
use App\Models\Modal;
use App\Models\Repairing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ReparingSeeder extends Seeder
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
                Repairing::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'service_two_type' => $status['service_two_type'],
                        'brand' => $status['brand'],
                        'modal' => $status['modal'],
                        'color' => $status['color'],
                        'plate_number' => $status['plate_number'],
                        'location_from' => $status['location_from'],
                        'upload_photo' => $status['upload_photo'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'uuid' => Str::uuid()->tostring(),
                'service_two_type' => Carwash::first()->id,
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'color' => 'red',
                'plate_number' => '12345',
                'location_from' => 'peshawar',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_two_type' => Carwash::first()->id,
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'color' => 'yellow',
                'plate_number' => '54321',
                'location_from' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_two_type' => Carwash::first()->id,
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'color' => 'green',
                'plate_number' => '98765',
                'location_from' => 'kalam',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
        ]);
    }
}
