<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('orders')->insert([
      'editable' => true,
      'received' => false,
      'supplier_id' => 3,
      'expected_delivery_date' => Carbon::tomorrow(),
      'total_order_cost' => 180.02,
      'store_id' => 1,
      'created_by'=>1,
      'created_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s')
      ]);

       DB::table('orders')->insert([
      'editable' => false,
      'received' => true,
      'supplier_id' => 2,
      'expected_delivery_date' => Carbon::tomorrow(),
      'total_order_cost' => 385.00,
      'store_id' => 1,
      'created_by'=>1,
      'created_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s')
      ]);

       DB::table('orders')->insert([
      'editable' => false,
      'received' => false,
      'supplier_id' => 1,
      'expected_delivery_date' => Carbon::tomorrow(),
      'total_order_cost' => 127.36,
      'store_id' => 1,
      'created_by'=>1,
      'created_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s')
      ]);
    }
}
