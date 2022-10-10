<?php

namespace Database\Seeders;

use App\Models\Towing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class TowingSeeder extends Seeder
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
                Towing::factory()
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
        ]);
    }
}
