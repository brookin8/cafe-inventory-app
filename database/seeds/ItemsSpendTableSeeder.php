<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsSpendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '20'),
      'item_id' => 5,
      'store_id' => 1,
      'spend' => 157.88,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '13'),
      'item_id' => 5,
      'store_id' => 1,
      'spend' => 36.44,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '06'),
      'item_id' => 5,
      'store_id' => 1,
      'spend' => 72.88,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '20'),
      'item_id' => 81,
      'store_id' => 1,
      'spend' => 26,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '13'),
      'item_id' => 81,
      'store_id' => 1,
      'spend' => 26,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '06'),
      'item_id' => 81,
      'store_id' => 1,
      'spend' => 39,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '20'),
      'item_id' => 163,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '13'),
      'item_id' => 163,
      'store_id' => 1,
      'spend' => 18.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '06'),
      'item_id' => 163,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);
    }
}
