<?php

namespace Database\Seeders;

use App\Models\Household;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class HouseholdSeeder extends Seeder
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
                Household::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Free Services',
            ],
            [
                'name' => 'Deleviring House Hold Services',
            ],
        ]);
    }
}
