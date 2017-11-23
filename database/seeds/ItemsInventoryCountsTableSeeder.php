<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsInventoryCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 1,
      'item_id' => 68,
      'inventorycount_qty' => 2,
      'inventory_dollar_amount' => 132.06,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

         DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 1,
      'item_id' => 69,
      'inventorycount_qty' => 1,
      'inventory_dollar_amount' => 76.35,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

         DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 1,
      'item_id' => 70,
      'inventorycount_qty' => 2,
      'inventory_dollar_amount' => 113.2,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 1,
      'item_id' => 147,
      'inventorycount_qty' => 3,
      'inventory_dollar_amount' => 155.22,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 2,
      'item_id' => 81,
      'inventorycount_qty' => 4,
      'inventory_dollar_amount' => 52.0,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 2,
      'item_id' => 83,
      'inventorycount_qty' => 5,
      'inventory_dollar_amount' => 65.0,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 2,
      'item_id' => 90,
      'inventorycount_qty' => 2,
      'inventory_dollar_amount' => 50.0,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 3,
      'item_id' => 170,
      'inventorycount_qty' => 3,
      'inventory_dollar_amount' => 28.5,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 3,
      'item_id' => 164,
      'inventorycount_qty' => 4,
      'inventory_dollar_amount' => 37.0,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);

        DB::table('items_inventorycounts')->insert([
      'inventorycount_id' => 3,
      'item_id' => 172,
      'inventorycount_qty' => 1,
      'inventory_dollar_amount' => 9.25,
      'created_at' => Carbon::now()->subDays(7),
      'updated_at' => Carbon::now()->subDays(7)
      ]);


    }
}
