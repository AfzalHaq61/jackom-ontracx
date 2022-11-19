<?php

namespace Database\Seeders;

use App\Models\Sell;
use App\Models\Sellcarsservice;
use App\Models\Sparepart;
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
            CarwashSeeder::class,
            SpareparttypeSeeder::class,
            CategorySeeder::class,
            DeportationSeeder::class,
            FueltypeSeeder::class,
            HouseholdSeeder::class,
            KindSeeder::class,
            SellSeeder::class,
            ShippingtypeSeeder::class,
            TransmissiontypeSeeder::class,
            RequestSeeder::class,
            OfferSeeder::class,
            OrderSeeder::class,
            ChatSeeder::class,
            MessegeSeeder::class,
        ]);
    }
}
