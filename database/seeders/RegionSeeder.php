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
                'name' => 'Malakand',
            ],
            [
                'name' => 'Kohat',
            ],
            [
                'name' => 'Mardan',
            ],
        ]);
    }
}
