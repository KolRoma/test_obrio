<?php

namespace Database\Seeders;

use App\Models\Astrologer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = [];

        $astrologers = Astrologer::all();

        foreach ($astrologers as $astrologer) {
            $photos[] = [
                'astrologer_id' => $astrologer->id,
                'mime_type' => 'image/jpeg',
                'path' => 'images/plug.jpg',
            ];
        }

        DB::table('photos')->insert($photos);
    }
}
