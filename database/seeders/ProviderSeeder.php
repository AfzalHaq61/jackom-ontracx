<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Nation;
use App\Models\Provider;
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ProviderSeeder extends Seeder
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
                Provider::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'name' => $status['name'],
                        'nationality' => $status['nationality'],
                        'country' => $status['country'],
                        'city' => $status['city'],
                        'region' => $status['region'],
                        'registration_number' => $status['registration_number'],
                        'comercial_activity' => $status['comercial_activity'],
                        'legal_capacity' => $status['legal_capacity'],
                        'address' => $status['address'],
                        'mobile_number' => $status['mobile_number'],
                        'iban' => $status['iban'],
                        'account_number' => $status['account_number'],
                        'license_photo_1' => $status['license_photo_1'],
                        'license_photo_2' => $status['license_photo_2'],
                        'upload_photo' => $status['upload_photo'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'uuid' => Str::uuid()->tostring(),
                'name' => 'Afzal',
                'nationality' => Nation::first()->id,
                'country' => Country::first()->id,
                'city' => City::first()->id,
                'region' => Region::first()->id,
                'registration_number' => '1234567890',
                'comercial_activity' => 'comercial_activity',
                'legal_capacity' => 'legal_capacity',
                'address' => 'peshawar pakistan',
                'mobile_number' => '436554',
                'iban' => '2434',
                'account_number' => '2346',
                'license_photo_1' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
                'license_photo_2' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'name' => 'Khan',
                'nationality' => Nation::first()->id,
                'country' => Country::first()->id,
                'city' => City::first()->id,
                'region' => Region::first()->id,
                'registration_number' => '1234567890',
                'comercial_activity' => 'comercial_activity',
                'legal_capacity' => 'legal_capacity',
                'address' => 'peshawar pakistan',
                'mobile_number' => '2424',
                'iban' => '5435',
                'account_number' => '4356',
                'license_photo_1' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
                'license_photo_2' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'name' => 'Subhan',
                'nationality' => Nation::first()->id,
                'country' => Country::first()->id,
                'city' => City::first()->id,
                'region' => Region::first()->id,
                'registration_number' => '1234567890',
                'comercial_activity' => 'comercial_activity',
                'legal_capacity' => 'legal_capacity',
                'address' => 'peshawar pakistan',
                'mobile_number' => '3443',
                'iban' => '1234',
                'account_number' => '43354',
                'license_photo_1' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
                'license_photo_2' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
        ]);
    }
}
