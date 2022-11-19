<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Fueltype;
use App\Models\Kind;
use App\Models\Modal;
use App\Models\Request;
use App\Models\Service;
use App\Models\Shippingtype;
use App\Models\Transmissiontype;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RequestSeeder extends Seeder
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
                Request::factory()
                    ->create([
                        'uuid' => $status['uuid'],
                        'user_id' => $status['user_id'],
                        'service_type' => $status['service_type'],
                        'name' => $status['name'],
                        'description' => $status['description'],
                        'price' => $status['price'],
                        'brand' => $status['brand'],
                        'modal' => $status['modal'],
                        'shipping_type' => $status['shipping_type'],
                        'kind' => $status['kind'],
                        'category' => $status['category'],
                        'size' => $status['size'],
                        'weight' => $status['weight'],
                        'color' => $status['color'],
                        'plate_number' => $status['plate_number'],
                        'car_serial_number' => $status['car_serial_number'],
                        'copy_of_regestration' => $status['copy_of_regestration'],
                        'manufacturing_year' => $status['manufacturing_year'],
                        'regional_specification' => $status['regional_specification'],
                        'paint' => $status['paint'],
                        'chasis_case' => $status['chasis_case'],
                        'kilo_meters' => $status['kilo_meters'],
                        'fuel_type' => $status['fuel_type'],
                        'transmission_type' => $status['transmission_type'],
                        'location' => $status['location'],
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
                'user_id' => User::first()->id,
                'service_type' => 'Shipping',
                'name' => 'Afzal Haq',
                'description' => 'dsfalkjs askjdfl jlksafd kjadsfl sfda afds wqre fsd xzvc ljk jklsfad',
                'price' => '3445',
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'shipping_type' => Shippingtype::first()->id,
                'kind' => Kind::first()->id,
                'category' => Category::first()->id,
                'size' => '34',
                'weight' => '45',
                'color' => 'red',
                'plate_number' => '456',
                'car_serial_number' => '345',
                'copy_of_regestration' => '342',
                'manufacturing_year' => '2356',
                'regional_specification' => 'frtgyh',
                'paint' => 'red',
                'chasis_case' => 'fegrht',
                'kilo_meters' => '34',
                'fuel_type' => Fueltype::first()->id,
                'transmission_type' => Transmissiontype::first()->id,
                'location' => 'Battagram',
                'location_to' => 'Mandal Dag',
                'upload_photo' => '1668693618-Magnet.png',
            ],
            [
                'uuid' => Str::uuid()->tostring(),
                'user_id' => User::first()->id,
                'service_type' => 'Towing',
                'name' => 'Afzal Haq',
                'description' => 'dsfalkjs askjdfl jlksafd kjadsfl sfda afds wqre fsd xzvc ljk jklsfad',
                'price' => '3445',
                'brand' => Brand::first()->id,
                'modal' => Modal::first()->id,
                'shipping_type' => Shippingtype::first()->id,
                'kind' => Kind::first()->id,
                'category' => Category::first()->id,
                'size' => '34',
                'weight' => '45',
                'color' => 'red',
                'plate_number' => '456',
                'car_serial_number' => '345',
                'copy_of_regestration' => '342',
                'manufacturing_year' => '2356',
                'regional_specification' => 'frtgyh',
                'paint' => 'red',
                'chasis_case' => 'fegrht',
                'kilo_meters' => '34',
                'fuel_type' => Fueltype::first()->id,
                'transmission_type' => Transmissiontype::first()->id,
                'location' => 'Salanda',
                'location_to' => 'Mandal Dag',
                'upload_photo' => '1668693618-Magnet.png',
            ],
        ]);
    }
}
