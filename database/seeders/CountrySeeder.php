<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class CountrySeeder extends Seeder
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
                Country::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Libia',
            ],
            [
                'name' => 'Qatar',
            ],
            [
                'name' => 'India',
            ],
        ]);
    }
}
