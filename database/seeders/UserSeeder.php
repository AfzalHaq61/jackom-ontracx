<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
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
                User::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'first_name' => $status['first_name'],
                        'last_name' => $status['last_name'],
                        'country' => $status['country'],
                        'city' => $status['city'],
                        'contact_number' => $status['contact_number'],
                        'email' => $status['email'],
                        'password' => $status['password'],
                        'checkbox' => $status['checkbox'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'uuid' => Str::uuid()->tostring(),
                'first_name' => 'Afzal',
                'last_name' => 'Haq',
                'country' => Country::first()->id,
                'city' => City::first()->id,
                'contact_number' => '034567890',
                'email' => 'afzal100@gmail.com',
                'password' => Hash::make('afzal100'),
                'checkbox' => true,
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'first_name' => 'Abdul',
                'last_name' => 'Haq',
                'country' => Country::first()->id,
                'city' => City::first()->id,
                'contact_number' => '03389898765',
                'email' => 'afzal200@gmail.com',
                'password' => Hash::make('afzal200'),
                'checkbox' => true,
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'first_name' => 'Salam',
                'last_name' => 'Jan',
                'country' => Country::first()->id,
                'city' => City::first()->id,
                'contact_number' => '03429837680',
                'email' => 'afzal300@gmail.com',
                'password' => Hash::make('afzal200'),
                'checkbox' => true,
            ],
        ]);
    }
}
