<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'title' => 'Натальная карта',
            ],
            [
                'title' => 'Детальный гороскоп',
            ],
            [
                'title' => 'Отчет совместимости',
            ],
            [
                'title' => 'Гороскоп на год',
            ],
        ];

        DB::table('services')->insert($services);
    }
}
