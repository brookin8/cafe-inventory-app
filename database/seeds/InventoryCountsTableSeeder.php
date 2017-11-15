<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InventoryCountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventorycounts')->insert([
      'editable' => false,
      'total_value_onhand' => 476.83,
      'store_id' => 1,
      'created_by'=>1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('inventorycounts')->insert([
      'editable' => false,
      'total_value_onhand' => 167.0,
      'store_id' => 1,
      'created_by'=>1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('inventorycounts')->insert([
      'editable' => true,
      'total_value_onhand' => 74.75,
      'store_id' => 1,
      'created_by'=>1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

    }
}
