<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class RegionSeeder extends Seeder
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
                Region::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Riyadh',
            ],
            [
                'name' => 'Makkah Al-Mukarramah',
            ],
            [
                'name' => 'Al-Madinah Al-Munawwarah',
            ],
            [
                'name' => 'Al-Qassim',
            ],
            [
                'name' => 'Eastern',
            ],
            [
                'name' => 'Asir',
            ],
            [
                'name' => 'Tabuk',
            ],
            [
                'name' => 'Hail',
            ],
            [
                'name' => 'Northern Border',
            ],
            [
                'name' => 'Jazan',
            ],
            [
                'name' => 'Najran',
            ],
            [
                'name' => 'Al Baha',
            ],
            [
                'name' => 'Al-Jawf',
            ],
            [
                'name' => 'Farasan Island',
            ],
            [
                'name' => 'Al Saqid',
            ],
            [
                'name' => 'Qammah',
            ],
            [
                'name' => 'Abu Ali',
            ],
            [
                'name' => 'Tarot',
            ],
            [
                'name' => 'Paradise',
            ],
        ]);
    }
}
