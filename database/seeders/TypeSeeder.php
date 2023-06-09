<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([        
            [
                'name' => 'House',
            ],
            [
                'name' => 'Apartment & Unit',
            ],
            [
                'name' => 'Villa',
            ],
            [
                'name' => 'Land',
            ],
            [
                'name' => 'Acreage',
            ],
            [
                'name' => 'Block Of Units',
            ],
        ]
    );
    }
}
