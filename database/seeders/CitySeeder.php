<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class CitySeeder extends Seeder
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
                City::factory()
                    ->create([
                        'name' => $status['name'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'name' => 'Riyadh',
            ],
            [
                'name' => 'Alkharag',
            ],
            [
                'name' => 'Dawadmi',
            ],
            [
                'name' => 'Al majmah',
            ],
            [
                'name' => 'Al-Quwayiyah',
            ],
            [
                'name' => 'Wadi Al Dawasir',
            ],
            [
                'name' => 'Afif',
            ],
            [
                'name' => 'Diriyah',
            ],
            [
                'name' => 'Zulfi',
            ],
            [
                'name' => 'Aflaj',
            ],
            [
                'name' => 'Hotat Bani Tamim',
            ],
            [
                'name' => 'Shaqra',
            ],
            [
                'name' => 'Muzahimiyah',
            ],
            [
                'name' => 'Alslayel',
            ],
            [
                'name' => 'Makkah Al-Mukarramah',
            ],
            [
                'name' => 'Jeddah',
            ],
            [
                'name' => 'Taif',
            ],
            [
                'name' => 'Qunfudhah',
            ],
            [
                'name' => 'Bahra',
            ],
            [
                'name' => 'Algmom',
            ],
            [
                'name' => 'Rabigh',
            ],
            [
                'name' => 'Laith',
            ],
            [
                'name' => 'Al ardeyat',
            ],
            [
                'name' => 'Maysan',
            ],
            [
                'name' => 'Khulais',
            ],
            [
                'name' => 'Adume',
            ],
            [
                'name' => 'Ranyh',
            ],
            [
                'name' => 'Trobeh',
            ],
            [
                'name' => 'Al Khurma',
            ],
            [
                'name' => 'Al mweh',
            ],
            [
                'name' => 'Medina',
            ],
            [
                'name' => 'Yanbu',
            ],
            [
                'name' => 'Badr',
            ],
            [
                'name' => 'Almehd',
            ],
            [
                'name' => 'Hanakia',
            ],
            [
                'name' => 'Al ola',
            ],
            [
                'name' => 'Khaibar',
            ],
            [
                'name' => 'Buraidah',
            ],
            [
                'name' => 'Unaizah',
            ],
            [
                'name' => 'Alrass',
            ],
            [
                'name' => 'Al bkeryah',
            ],
            [
                'name' => 'Badayea',
            ],
            [
                'name' => 'Nabhania',
            ],
            [
                'name' => 'Meznab',
            ],
            [
                'name' => 'Ehsaa',
            ],
            [
                'name' => 'Dammam',
            ],
            [
                'name' => 'Qatif',
            ],
            [
                'name' => 'Al khuber',
            ],
            [
                'name' => 'Hafar Al-Batin',
            ],
            [
                'name' => 'Jubail',
            ],
            [
                'name' => 'Khafji',
            ],
            [
                'name' => 'Ras Tanura',
            ],
            [
                'name' => 'Abqaiq',
            ],
            [
                'name' => 'Abha',
            ],
            [
                'name' => 'Khamis Mushait',
            ],
            [
                'name' => 'Bisha',
            ],
            [
                'name' => 'Mahayel',
            ],
            [
                'name' => 'Ahad Rafidah',
            ],
            [
                'name' => 'Belqrn',
            ],
            [
                'name' => 'Sarat',
            ],
            [
                'name' => 'Rijal Almaa',
            ],
            [
                'name' => 'Namas',
            ],
            [
                'name' => 'Majarda',
            ],
            [
                'name' => 'Tathleath',
            ],
            [
                'name' => 'Barq',
            ],
            [
                'name' => 'Dhahran South',
            ],
            [
                'name' => 'Tabouk',
            ],
            [
                'name' => 'Umluj',
            ],
            [
                'name' => 'Wajh',
            ],
            [
                'name' => 'Duba',
            ],
            [
                'name' => 'Tema',
            ],
            [
                'name' => 'Hail',
            ],
            [
                'name' => 'Al hayet',
            ],
            [
                'name' => 'Paqaa',
            ],
            [
                'name' => 'Arar',
            ],
            [
                'name' => 'Rafha',
            ],
            [
                'name' => 'Treaf',
            ],
            [
                'name' => 'Jazan',
            ],
            [
                'name' => 'Samtah',
            ],
            [
                'name' => 'Sabya',
            ],
            [
                'name' => 'Abu Arish',
            ],
            [
                'name' => 'Ahd al msarheh',
            ],
            [
                'name' => 'Alaaredh',
            ],
            [
                'name' => 'ligature',
            ],
            [
                'name' => 'Bish',
            ],
            [
                'name' => 'Darb',
            ],
            [
                'name' => 'Dayer',
            ],
            [
                'name' => 'Altwal',
            ],
            [
                'name' => 'Najran',
            ],
            [
                'name' => 'Sharurah',
            ],
            [
                'name' => 'Al Baha',
            ],
            [
                'name' => 'Baljurashi',
            ],
            [
                'name' => 'Almakhwah',
            ],
            [
                'name' => 'Alkalosis',
            ],
            [
                'name' => 'Sakaka',
            ],
            [
                'name' => 'Qurayyat',
            ],
            [
                'name' => 'Tabarjal',
            ],
            [
                'name' => 'Jandal',
            ],
        ]);
    }
} 
