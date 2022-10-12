<?php

namespace Database\Seeders;

use App\Models\Spareparttype;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class SpareparttypeSeeder extends Seeder
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
                Spareparttype::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'New Spare Parts',
            ],
            [
                'name' => 'Old Spare Parts',
            ],
        ]);
    }
}
