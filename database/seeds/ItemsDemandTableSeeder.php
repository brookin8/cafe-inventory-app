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
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 5,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 5,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

          DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '20'),
      'item_id' => 5,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]); 

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '13'),
      'item_id' => 5,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]); 

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '6'),
      'item_id' => 5,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]); 


        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 81,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 81,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

          DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '20'),
      'item_id' => 81,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]); 

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '13'),
      'item_id' => 81,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]); 

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '6'),
      'item_id' => 81,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

         DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 163,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 163,
      'store_id' => 4,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

          DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '20'),
      'item_id' => 163,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]); 

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '13'),
      'item_id' => 163,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]); 

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '6'),
      'item_id' => 163,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 10,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 10,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 10,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 10,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 10,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 17,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 17,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 17,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 17,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 17,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 22,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 22,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 22,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 22,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 22,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 32,
      'store_id' => 1,
      'demand' => 6,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 32,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 32,
      'store_id' => 1,
      'demand' => 6,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 32,
      'store_id' => 1,
      'demand' => 6,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 32,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 35,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 35,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 35,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 35,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 35,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 41,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 41,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 41,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 41,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 41,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 47,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 47,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 47,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 47,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 47,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 52,
      'store_id' => 1,
      'demand' => 30,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 52,
      'store_id' => 1,
      'demand' => 27,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 52,
      'store_id' => 1,
      'demand' => 28,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 52,
      'store_id' => 1,
      'demand' => 28,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 52,
      'store_id' => 1,
      'demand' => 30,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 57,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 57,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 57,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 57,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 57,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 62,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 62,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 62,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 62,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 62,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 69,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 69,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 69,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 69,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 69,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 76,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 76,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 76,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 76,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 76,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 90,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 90,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 90,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 90,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 90,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 99,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 99,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 99,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 99,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 99,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 104,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 104,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 104,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 104,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 104,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 109,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 109,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 109,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 109,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 109,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 113,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 113,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 113,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 113,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 113,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 118,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 118,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 118,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 118,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 118,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 123,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 123,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 123,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 123,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 123,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 128,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 128,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 128,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 128,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 128,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 132,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 132,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 132,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 132,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 132,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 136,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 136,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 136,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 136,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 136,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 141,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 141,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 141,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 141,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 141,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 147,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 147,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 147,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 147,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 147,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 146,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 146,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 146,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 146,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 146,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 150,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 150,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 150,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 150,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 150,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 153,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 153,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 153,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 153,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 153,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 154,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 154,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 154,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 154,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 154,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 162,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 162,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 162,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 162,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 162,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 166,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 166,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 166,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 166,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 166,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 170,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 170,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 170,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 170,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 170,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 176,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 176,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 176,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 176,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 176,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 180,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 180,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 180,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 180,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 180,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 182,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 182,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 182,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 182,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 182,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 15,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 15,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 15,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 15,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 15,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 27,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 27,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 27,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 27,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 27,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 40,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 40,
      'store_id' => 1,
      'demand' => 6,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 40,
      'store_id' => 1,
      'demand' => 6,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 40,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 40,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 43,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 43,
      'store_id' => 1,
      'demand' => 6,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 43,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 43,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 43,
      'store_id' => 1,
      'demand' => 6,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 49,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 49,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 49,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 49,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 49,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 59,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 59,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 59,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 59,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 59,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 85,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 85,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 85,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 85,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 85,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 94,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 94,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 94,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 94,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 94,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 100,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 100,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 100,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 100,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 100,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 116,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 116,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 116,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 116,
      'store_id' => 1,
      'demand' => 5,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 116,
      'store_id' => 1,
      'demand' => 6,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 129,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 129,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 129,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 129,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 129,
      'store_id' => 1,
      'demand' => 3,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2016', '12', '5'),
      'item_id' => 129,
      'store_id' => 1,
      'demand' => 4,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 164,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 164,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 164,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 164,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 164,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2016', '12', '5'),
      'item_id' => 164,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

      DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 173,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 173,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 173,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 173,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 173,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2016', '12', '5'),
      'item_id' => 173,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '12', '04'),
      'item_id' => 73,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' => Carbon::create('2017', '11', '27'),
      'item_id' => 73,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

       DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '20'),
      'item_id' => 73,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '13'),
      'item_id' => 73,
      'store_id' => 1,
      'demand' => 0,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2017', '11', '6'),
      'item_id' => 73,
      'store_id' => 1,
      'demand' => 2,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);

        DB::table('items_demand')->insert([
      'week' =>  Carbon::create('2016', '12', '5'),
      'item_id' => 73,
      'store_id' => 1,
      'demand' => 1,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
      ]);
    }
}
