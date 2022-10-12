<?php

namespace Database\Seeders;

use App\Models\Shippingtype;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class ShippingtypeSeeder extends Seeder
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
                Shippingtype::factory()
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
