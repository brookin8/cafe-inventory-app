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
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 5,
      'store_id' => 1,
      'spend' => 157.88,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 5,
      'store_id' => 1,
      'spend' => 36.44,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 5,
      'store_id' => 1,
      'spend' => 72.88,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 5,
      'store_id' => 1,
      'spend' => 54.66,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 5,
      'store_id' => 1,
      'spend' => 36.44,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 81,
      'store_id' => 1,
      'spend' => 26,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 81,
      'store_id' => 1,
      'spend' => 26,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 81,
      'store_id' => 1,
      'spend' => 39,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 81,
      'store_id' => 1,
      'spend' => 13,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 81,
      'store_id' => 1,
      'spend' => 26,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 163,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 163,
      'store_id' => 1,
      'spend' => 18.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 163,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 163,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 163,
      'store_id' => 1,
      'spend' => 27.75,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 10,
      'store_id' => 1,
      'spend' => 46.01,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 10,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 10,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 10,
      'store_id' => 1,
      'spend' => 46.01,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 10,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 17,
      'store_id' => 1,
      'spend' => 98.36,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 17,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 17,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 17,
      'store_id' => 1,
      'spend' => 98.35,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 17,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 22,
      'store_id' => 1,
      'spend' => 16.66,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 22,
      'store_id' => 1,
      'spend' => 8.33,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 22,
      'store_id' => 1,
      'spend' => 16.66,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 22,
      'store_id' => 1,
      'spend' => 24.99,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 22,
      'store_id' => 1,
      'spend' => 8.33,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 32,
      'store_id' => 1,
      'spend' => 80,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 32,
      'store_id' => 1,
      'spend' => 96,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 32,
      'store_id' => 1,
      'spend' => 80,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 32,
      'store_id' => 1,
      'spend' => 80,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 32,
      'store_id' => 1,
      'spend' => 112,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 35,
      'store_id' => 1,
      'spend' => 72,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 35,
      'store_id' => 1,
      'spend' => 88,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 35,
      'store_id' => 1,
      'spend' => 72,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 35,
      'store_id' => 1,
      'spend' => 96,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 35,
      'store_id' => 1,
      'spend' => 80,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 41,
      'store_id' => 1,
      'spend' => 101.97,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 41,
      'store_id' => 1,
      'spend' => 101.97,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 41,
      'store_id' => 1,
      'spend' => 203.94,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 41,
      'store_id' => 1,
      'spend' => 101.97,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 41,
      'store_id' => 1,
      'spend' => 101.97,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 47,
      'store_id' => 1,
      'spend' => 80.52,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 47,
      'store_id' => 1,
      'spend' => 53.68,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 47,
      'store_id' => 1,
      'spend' => 80.52,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 47,
      'store_id' => 1,
      'spend' => 80.52,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 47,
      'store_id' => 1,
      'spend' => 53.68,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 52,
      'store_id' => 1,
      'spend' => 364,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 52,
      'store_id' => 1,
      'spend' => 308,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 52,
      'store_id' => 1,
      'spend' => 322,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 52,
      'store_id' => 1,
      'spend' => 322,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 52,
      'store_id' => 1,
      'spend' => 364,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 57,
      'store_id' => 1,
      'spend' => 38.76,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 57,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 57,
      'store_id' => 1,
      'spend' => 19.38,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 57,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 57,
      'store_id' => 1,
      'spend' => 38.76,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 62,
      'store_id' => 1,
      'spend' => 58.88,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 62,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 62,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 62,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 62,
      'store_id' => 1,
      'spend' => 58.88,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 69,
      'store_id' => 1,
      'spend' => 76.35,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 69,
      'store_id' => 1,
      'spend' => 76.35,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 69,
      'store_id' => 1,
      'spend' => 76.35,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 69,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 69,
      'store_id' => 1,
      'spend' => 76.35,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 76,
      'store_id' => 1,
      'spend' => 26.20,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 76,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 76,
      'store_id' => 1,
      'spend' => 26.20,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 76,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11','6','0','0','0'),
      'item_id' => 76,
      'store_id' => 1,
      'spend' => 52.40,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 90,
      'store_id' => 1,
      'spend' => 150,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 90,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 90,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 90,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 90,
      'store_id' => 1,
      'spend' => 50,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 99,
      'store_id' => 1,
      'spend' => 270,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 99,
      'store_id' => 1,
      'spend' => 270,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 99,
      'store_id' => 1,
      'spend' => 270,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 99,
      'store_id' => 1,
      'spend' => 378,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 99,
      'store_id' => 1,
      'spend' => 432,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 104,
      'store_id' => 1,
      'spend' => 39,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 104,
      'store_id' => 1,
      'spend' => 39,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 104,
      'store_id' => 1,
      'spend' => 52,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 104,
      'store_id' => 1,
      'spend' => 39,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 104,
      'store_id' => 1,
      'spend' => 26,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 109,
      'store_id' => 1,
      'spend' => 150,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 109,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 109,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 109,
      'store_id' => 1,
      'spend' => 150,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 109,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 113,
      'store_id' => 1,
      'spend' => 173.75,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11','27','0','0','0'),
      'item_id' => 113,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 113,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 113,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 113,
      'store_id' => 1,
      'spend' => 69.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 118,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 118,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 118,
      'store_id' => 1,
      'spend' => 22.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 118,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 118,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 123,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 123,
      'store_id' => 1,
      'spend' => 36,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 123,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 123,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 123,
      'store_id' => 1,
      'spend' => 6,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 128,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 128,
      'store_id' => 1,
      'spend' => 120,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 128,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 128,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 128,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 132,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 132,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 132,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 132,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 132,
      'store_id' => 1,
      'spend' => 150,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 136,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 136,
      'store_id' => 1,
      'spend' => 60,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 136,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 136,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 136,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 141,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 141,
      'store_id' => 1,
      'spend' => 36,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 141,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 141,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 141,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 147,
      'store_id' => 1,
      'spend' => 51.74,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 147,
      'store_id' => 1,
      'spend' => 51.74,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 147,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 147,
      'store_id' => 1,
      'spend' => 51.74,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 147,
      'store_id' => 1,
      'spend' => 51.74,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 146,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 146,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 146,
      'store_id' => 1,
      'spend' => 29.27,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 146,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 146,
      'store_id' => 1,
      'spend' => 29.27,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 150,
      'store_id' => 1,
      'spend' => 7.23,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 150,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 150,
      'store_id' => 1,
      'spend' => 14.46,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 150,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 150,
      'store_id' => 1,
      'spend' => 7.23,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 153,
      'store_id' => 1,
      'spend' => 13.34,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 153,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 153,
      'store_id' => 1,
      'spend' => 26.68,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 153,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 153,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);


       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 154,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 154,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 154,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 154,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11','6','0','0','0'),
      'item_id' => 154,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 162,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 162,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 162,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 162,
      'store_id' => 1,
      'spend' => 7.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 162,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 166,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 166,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 166,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 166,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 166,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 170,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 170,
      'store_id' => 1,
      'spend' => 9.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 170,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 170,
      'store_id' => 1,
      'spend' => 9.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 170,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 176,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 176,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 176,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 176,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 176,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 180,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 180,
      'store_id' => 1,
      'spend' => 35.38,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 180,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 180,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 180,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 182,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 182,
      'store_id' => 1,
      'spend' => 61,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 182,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 182,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 182,
      'store_id' => 1,
      'spend' => 61,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 15,
      'store_id' => 1,
      'spend' => 66,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 15,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 15,
      'store_id' => 1,
      'spend' => 33,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 15,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11','06','0','0','0'),
      'item_id' => 15,
      'store_id' => 1,
      'spend' => 33,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12','04','0','0','0'),
      'item_id' => 27,
      'store_id' => 1,
      'spend' => 163.47,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 27,
      'store_id' => 1,
      'spend' => 163.47,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 27,
      'store_id' => 1,
      'spend' => 217.96,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 27,
      'store_id' => 1,
      'spend' => 163.47,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 27,
      'store_id' => 1,
      'spend' => 108.98,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 40,
      'store_id' => 1,
      'spend' => 295.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 40,
      'store_id' => 1,
      'spend' => 265.68,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 40,
      'store_id' => 1,
      'spend' => 295.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 40,
      'store_id' => 1,
      'spend' => 295.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 40,
      'store_id' => 1,
      'spend' => 324.72,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 43,
      'store_id' => 1,
      'spend' => 295.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 43,
      'store_id' => 1,
      'spend' => 265.68,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 43,
      'store_id' => 1,
      'spend' => 295.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 43,
      'store_id' => 1,
      'spend' => 295.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 43,
      'store_id' => 1,
      'spend' => 324.72,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 49,
      'store_id' => 1,
      'spend' => 52.71,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 49,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 49,
      'store_id' => 1,
      'spend' => 52.71,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 49,
      'store_id' => 1,
      'spend' => 52.71,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 49,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 59,
      'store_id' => 1,
      'spend' => 22.13,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 59,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 59,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 59,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 59,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 85,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 85,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 85,
      'store_id' => 1,
      'spend' => 130,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 85,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 85,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 94,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 94,
      'store_id' => 1,
      'spend' => 70,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 94,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 94,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 94,
      'store_id' => 1,
      'spend' => 28,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 100,
      'store_id' => 1,
      'spend' => 800,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 100,
      'store_id' => 1,
      'spend' => 480,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 100,
      'store_id' => 1,
      'spend' => 480,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 100,
      'store_id' => 1,
      'spend' => 480,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 100,
      'store_id' => 1,
      'spend' => 640,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 116,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 116,
      'store_id' => 1,
      'spend' => 173.75,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 116,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 116,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 116,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 129,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 129,
      'store_id' => 1,
      'spend' => 225,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 129,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 129,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 129,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2016', '12', '5','0','0','0'),
      'item_id' => 129,
      'store_id' => 1,
      'spend' => 225,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 164,
      'store_id' => 1,
      'spend' => 18.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 164,
      'store_id' => 1,
      'spend' => 18.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 164,
      'store_id' => 1,
      'spend' => 27.75,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 164,
      'store_id' => 1,
      'spend' => 27.75,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 164,
      'store_id' => 1,
      'spend' => 18.5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2016', '12', '5','0','0','0'),
      'item_id' => 164,
      'store_id' => 1,
      'spend' => 27.75,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 173,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 173,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 173,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 173,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 173,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2016', '12', '5','0','0','0'),
      'item_id' => 173,
      'store_id' => 1,
      'spend' => 9.25,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 73,
      'store_id' => 1,
      'spend' => 26.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '11', '27','0','0','0'),
      'item_id' => 73,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '20','0','0','0'),
      'item_id' => 73,
      'store_id' => 1,
      'spend' => 26.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '13','0','0','0'),
      'item_id' => 73,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '11', '6','0','0','0'),
      'item_id' => 73,
      'store_id' => 1,
      'spend' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2016', '12', '5','0','0','0'),
      'item_id' => 73,
      'store_id' => 1,
      'spend' => 26.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' =>  Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 73,
      'store_id' => 2,
      'spend' => 26.2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_spend')->insert([
      'week' => Carbon::create('2017', '12', '04','0','0','0'),
      'item_id' => 173,
      'store_id' => 2,
      'spend' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);
    }
}






