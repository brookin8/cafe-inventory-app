<?php

use Illuminate\Database\Seeder;

class OrderMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('order_methods')->insert([
        'method' => 'email',
      ]);
      DB::table('order_methods')->insert([
        'method' => 'website',
      ]);
    }
}
