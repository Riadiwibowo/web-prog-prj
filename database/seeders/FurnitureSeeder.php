<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('furnitures')->insert([
            'name' => 'Vuku',
            'price' => 140000,
            'type' => 'Chair',
            'color' => 'Black',
        ]);

        DB::table('furnitures')->insert([
            'name' => 'Veke',
            'price' => 10000,
            'type' => 'Table',
            'color' => 'White',
        ]);

        DB::table('furnitures')->insert([
            'name' => 'Vaka',
            'price' => 120000,
            'type' => 'Chair',
            'color' => 'White',
        ]);

        DB::table('furnitures')->insert([
            'name' => 'Viki',
            'price' => 1400000,
            'type' => 'Table',
            'color' => 'Black',
        ]);

        DB::table('furnitures')->insert([
            'name' => 'Voko',
            'price' => 1140000,
            'type' => 'Chair',
            'color' => 'Black',
        ]);
    }
}
