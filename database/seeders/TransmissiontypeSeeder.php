<?php

namespace Database\Seeders;

use App\Models\Transmissiontype;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class TransmissiontypeSeeder extends Seeder
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
                Transmissiontype::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Manual',
            ],
            [
                'name' => 'Automatic',
            ],
        ]);
    }
}
