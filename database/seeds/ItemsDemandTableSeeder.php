<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsDemandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '20'),
      'item_id' => 5,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '13'),
      'item_id' => 5,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

          DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '06'),
      'item_id' => 5,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]); 

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '20'),
      'item_id' => 81,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '13'),
      'item_id' => 81,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

          DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '06'),
      'item_id' => 81,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]); 

         DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '20'),
      'item_id' => 163,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '13'),
      'item_id' => 163,
      'store_id' => 4,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

          DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '06'),
      'item_id' => 163,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]); 

    }
}
