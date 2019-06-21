<?php

use Illuminate\Database\Seeder;

class PianosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianos')->insert([
            'brand' => 'Yamaha',
            'keys' => 250,
            'height' => 105,
            'width' => 140,
            'depth' => 50,
            'color' => 'noir',
        ]);
        DB::table('pianos')->insert([
            'brand' => 'Lidl',
            'keys' => 3,
            'height' => 17,
            'width' => 22,
            'depth' => 1,
            'color' => 'pourpre',
        ]);
        DB::table('pianos')->insert([
            'brand' => 'Stradivarius',
            'keys' => 1502,
            'height' => 120,
            'width' => 1700,
            'depth' => 2809,
            'color' => 'fuschia',
        ]);
        DB::table('pianos')->insert([
            'brand' => 'Fender',
            'keys' => 0,
            'height' => 40,
            'width' => 15,
            'depth' => 10,
            'color' => 'marronnasse',
        ]);
    }
}
