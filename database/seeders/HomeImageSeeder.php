<?php

namespace Database\Seeders;

use App\Models\HomeImage;
use Illuminate\Database\Seeder;

class HomeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 6; $i++) {
            HomeImage::create(['content' => json_encode(
                [
                    'url' => 'test.jpg',
                    'name' => 'test',
                ]
            )]);
        }
    }
}
