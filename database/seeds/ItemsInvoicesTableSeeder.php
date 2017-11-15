<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsInvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('items_invoices')->insert([
      'invoice_id' => 1,
      'item_id' => 83,
      'invoice_qty' => 4,
      'invoice_dollar_amount' => 52,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items_invoices')->insert([
      'invoice_id' => 1,
      'item_id' => 100,
      'invoice_qty' => 2,
      'invoice_dollar_amount' => 320.00,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items_invoices')->insert([
      'invoice_id' => 2,
      'item_id' => 139,
      'invoice_qty' => 5,
      'invoice_dollar_amount' => 30.00,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items_invoices')->insert([
      'invoice_id' => 2,
      'item_id' => 127,
      'invoice_qty' => 10,
      'invoice_dollar_amount' => 22.50,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    
    	DB::table('items_invoices')->insert([
      'invoice_id' => 2,
      'item_id' => 119,
      'invoice_qty' => 8,
      'invoice_dollar_amount' => 32.00,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

    	DB::table('items_invoices')->insert([
      'invoice_id' => 3,
      'item_id' => 113,
      'invoice_qty' => 20,
      'invoice_dollar_amount' => 139.00,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    
    	DB::table('items_invoices')->insert([
      'invoice_id' => 3,
      'item_id' => 114,
      'invoice_qty' => 20,
      'invoice_dollar_amount' => 139.00,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
