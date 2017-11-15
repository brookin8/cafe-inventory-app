<?php

use Illuminate\Database\Seeder;

class UomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('uoms')->insert([
        'unit' => 'EA'
      ]);
       DB::table('uoms')->insert([
        'unit' => 'CS'
      ]);
    }
}
