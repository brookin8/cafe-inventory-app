<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('items_orders')->insert([
      'order_id' => 1,
      'item_id' => 5,
      'order_qty' => 3,
      'orders_dollar_amount' => 109.32,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items_orders')->insert([
      'order_id' => 1,
      'item_id' => 8,
      'order_qty' => 1,
      'orders_dollar_amount' => 24.69,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items_orders')->insert([
      'order_id' => 1,
      'item_id' => 10,
      'order_qty' => 1,
      'orders_dollar_amount' => 46.01,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items_orders')->insert([
      'order_id' => 2,
      'item_id' => 83,
      'order_qty' => 5,
      'orders_dollar_amount' => 65,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items_orders')->insert([
      'order_id' => 2,
      'item_id' => 100,
      'order_qty' => 2,
      'orders_dollar_amount' => 320,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

         DB::table('items_orders')->insert([
      'order_id' => 3,
      'item_id' => 163,
      'order_qty' => 6,
      'orders_dollar_amount' => 55.5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items_orders')->insert([
      'order_id' => 3,
      'item_id' => 153,
      'order_qty' => 4,
      'orders_dollar_amount' => 53.36,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items_orders')->insert([
      'order_id' => 3,
      'item_id' => 165,
      'order_qty' => 2,
      'orders_dollar_amount' => 18.5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
