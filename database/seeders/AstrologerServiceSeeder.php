<?php

namespace Database\Seeders;

use App\Models\Astrologer;
use App\Models\Service;
use Illuminate\Database\Seeder;

class AstrologerServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $astrologers = Astrologer::all();
        $services = Service::all();

        foreach ($astrologers as $astrologer) {
            $serviceCount = rand(1, 4);
            $servicesRandom = $services->random($serviceCount);
            for ($i = 0; $i < $serviceCount; $i++) {
                $astrologer->services()->attach($servicesRandom[$i]->id, ['price' => rand(1, 50)]);
            }
        }
    }
}
