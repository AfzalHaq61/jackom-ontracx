<?php

namespace Database\Seeders;

use App\Models\Fueltype;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class FueltypeSeeder extends Seeder
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
                Fueltype::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Electric',
            ],
            [
                'name' => 'Hybrid',
            ],
            [
                'name' => 'Petrol',
            ],
            [
                'name' => 'Diesel',
            ],
            [
                'name' => 'Hybrid Plug-in',
            ],
        ]);
    }
}
