<?php

namespace Database\Seeders;

use App\Models\Sell;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class SellSeeder extends Seeder
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
                Sell::factory()
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
