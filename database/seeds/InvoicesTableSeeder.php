<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('invoices')->insert([
      'editable' => false,
      'order_id' => 2,
      'supplier_id' => 2,
      'actual_delivery_date' => Carbon::now(),
      'total_invoice_amount' => 372.0,
      'store_id' => 1,
      'created_by'=>1,
      'created_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s')
      ]);

        DB::table('invoices')->insert([
      'editable' => false,
      'supplier_id' => 7,
      'order_id' => 5,
      'actual_delivery_date' => Carbon::now(),
      'total_invoice_amount' => 84.50,
      'store_id' => 1,
      'created_by'=>1,
      'created_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s')
      ]);

        DB::table('invoices')->insert([
      'editable' => true,
      'order_id' => 7,
      'supplier_id' => 4,
      'actual_delivery_date' => Carbon::now(),
      'total_invoice_amount' => 278.00,
      'store_id' => 1,
      'created_by'=>1,
      'created_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s')
      ]);
    }
}
