<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class BrandSeeder extends Seeder
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
                Brand::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Honda',
            ],
            [
                'name' => 'Yamaha',
            ],
            [
                'name' => 'Toyota',
            ],
        ]);
    }
}
