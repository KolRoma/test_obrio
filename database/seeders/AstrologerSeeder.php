<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AstrologerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $astrologers = [
            [
                'first_name' => 'Люси',
                'last_name' => 'Смит',
                'email' => 'lucy@mail.com',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui ex, rhoncus at auctor non, accumsan ut nibh. Proin vel ullamcorper felis, eu malesuada augue. Nunc eget vestibulum nulla. Integer consectetur urna in auctor aliquam.',
            ],
            [
                'first_name' => 'Кен',
                'last_name' => 'Смит',
                'email' => 'ken@mail.com',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui ex, rhoncus at auctor non, accumsan ut nibh. Proin vel ullamcorper felis, eu malesuada augue. Nunc eget vestibulum nulla. Integer consectetur urna in auctor aliquam.',
            ],
            [
                'first_name' => 'Барбара',
                'last_name' => 'Смит',
                'email' => 'barbara@mail.com',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui ex, rhoncus at auctor non, accumsan ut nibh. Proin vel ullamcorper felis, eu malesuada augue. Nunc eget vestibulum nulla. Integer consectetur urna in auctor aliquam.',
            ],
            [
                'first_name' => 'Кевин',
                'last_name' => 'Смит',
                'email' => 'kkvin@mail.com',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui ex, rhoncus at auctor non, accumsan ut nibh. Proin vel ullamcorper felis, eu malesuada augue. Nunc eget vestibulum nulla. Integer consectetur urna in auctor aliquam.',
            ],
            [
                'first_name' => 'Сьюзи',
                'last_name' => 'Смит',
                'email' => 'susie@mail.com',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui ex, rhoncus at auctor non, accumsan ut nibh. Proin vel ullamcorper felis, eu malesuada augue. Nunc eget vestibulum nulla. Integer consectetur urna in auctor aliquam.',
            ],
            [
                'first_name' => 'Эмма',
                'last_name' => 'Смит',
                'email' => 'emma@mail.com',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dui ex, rhoncus at auctor non, accumsan ut nibh. Proin vel ullamcorper felis, eu malesuada augue. Nunc eget vestibulum nulla. Integer consectetur urna in auctor aliquam.',
            ],
        ];

        DB::table('astrologers')->insert($astrologers);
    }
}
