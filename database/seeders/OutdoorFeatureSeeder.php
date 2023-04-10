<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutdoorFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outdoorfeatures')->insert([        
            [
                'name' => 'Swimming pool',
            ],
            [
                'name' => 'Garage',
            ],
            [
                'name' => 'Balcony',
            ],
            [
                'name' => 'Outdoor area',
            ],
            [
                'name' => 'Undercover parking',
            ],
            [
                'name' => 'Shed',
            ],
            [
                'name' => 'Fully fenced',
            ],
        ]);
    }
}
