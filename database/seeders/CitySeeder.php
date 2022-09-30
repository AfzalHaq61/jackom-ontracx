<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class CitySeeder extends Seeder
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
                City::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Mingora',
            ],
            [
                'name' => 'Peshawar',
            ],
            [
                'name' => 'Mansehra',
            ],
        ]);
    }
}
