<?php

namespace Database\Seeders;

use App\Models\Modal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class ModalSeeder extends Seeder
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
                Modal::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => '2021',
            ],
            [
                'name' => '2020',
            ],
            [
                'name' => '2019',
            ],
        ]);
    }
}
