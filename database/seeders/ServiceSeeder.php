<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
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
                Service::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Towing',
            ],
            [
                'name' => 'Shipping',
            ],
            [
                'name' => 'Car Washing',
            ],
            [
                'name' => 'Car Reparing',
            ],
            [
                'name' => 'New Spare Parts',
            ],
            [
                'name' => 'Old Spare Parts',
            ],
            [
                'name' => 'Deportation',
            ],
            [
                'name' => 'Baggage Transfer',
            ],
            [
                'name' => 'Free Services',
            ],
            [
                'name' => 'Deleviring House Hold Services',
            ],
        ]);
    }
}
