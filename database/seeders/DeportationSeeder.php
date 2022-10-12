<?php

namespace Database\Seeders;

use App\Models\Deportation;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class DeportationSeeder extends Seeder
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
                Deportation::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Deportation',
            ],
            [
                'name' => 'Baggage Transfer',
            ],
        ]);
    }
}
