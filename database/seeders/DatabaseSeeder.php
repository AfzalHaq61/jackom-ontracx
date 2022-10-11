<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NationSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            RegionSeeder::class,
            UserSeeder::class,
            ProviderSeeder::class,
            TowingSeeder::class,
            BrandSeeder::class,
            ModalSeeder::class,
            ShippingSeeder::class,
            CarwashSeeder::class,
            ReparingSeeder::class,
        ]);
    }
}
