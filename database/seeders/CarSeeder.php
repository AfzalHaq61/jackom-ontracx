<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Category;
use App\Models\Fueltype;
use App\Models\Sell;
use App\Models\Transmissiontype;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
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
                Car::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'service_sellcars_type' => $status['service_sellcars_type'],
                        'category' => $status['category'],
                        'manufacturing_year' => $status['manufacturing_year'],
                        'regional_specification' => $status['regional_specification'],
                        'paint' => $status['paint'],
                        'chasis_case' => $status['chasis_case'],
                        'kilo_meters' => $status['kilo_meters'],
                        'color' => $status['color'],
                        'fuel_type' => $status['fuel_type'],
                        'transmission_type' => $status['transmission_type'],
                        'name' => $status['name'],
                        'description' => $status['description'],
                        'price' => $status['price'],
                        'location' => $status['location'],
                        'upload_photo' => $status['upload_photo'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'uuid' => Str::uuid()->tostring(),
                'service_sellcars_type' => Sell::first()->id,
                'category' => Category::first()->id,
                'manufacturing_year' => '2000',
                'regional_specification' => 'khar',
                'paint' => 'red',
                'chasis_case' => 'peshawar',
                'kilo_meters' => '34',
                'color' => 'yellow',
                'fuel_type' => Fueltype::first()->id,
                'transmission_type' => Transmissiontype::first()->id,
                'name' => 'bugatti',
                'description' => 'lorem sdjflskdjf sdjflkasdjf sdljflasdj',
                'price' => '34000',
                'location' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_sellcars_type' => Sell::first()->id,
                'category' => Category::first()->id,
                'manufacturing_year' => '2000',
                'regional_specification' => 'khar',
                'paint' => 'red',
                'chasis_case' => 'peshawar',
                'kilo_meters' => '34',
                'color' => 'yellow',
                'fuel_type' => Fueltype::first()->id,
                'transmission_type' => Transmissiontype::first()->id,
                'name' => 'bugatti',
                'description' => 'lorem sdjflskdjf sdjflkasdjf sdljflasdj',
                'price' => '34000',
                'location' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'service_sellcars_type' => Sell::first()->id,
                'category' => Category::first()->id,
                'manufacturing_year' => '2000',
                'regional_specification' => 'khar',
                'paint' => 'red',
                'chasis_case' => 'peshawar',
                'kilo_meters' => '34',
                'color' => 'yellow',
                'fuel_type' => Fueltype::first()->id,
                'transmission_type' => Transmissiontype::first()->id,
                'name' => 'bugatti',
                'description' => 'lorem sdjflskdjf sdjflkasdjf sdljflasdj',
                'price' => '34000',
                'location' => 'malakand',
                'upload_photo' => '63381f6d28159-C:\fakepath\GigFronWeb (1).png',
            ],
        ]);
    }
}
