<?php

namespace Database\Seeders;

use App\Models\Carwash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class CarwashSeeder extends Seeder
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
                Carwash::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Car Washing',
            ],
            [
                'name' => 'Car Reparing',
            ],
        ]);
    }
}
