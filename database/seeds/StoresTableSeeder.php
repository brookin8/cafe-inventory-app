<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
        'name' => 'Limestone',
        'order_email_address' => 'aaron@northlime.net',
        'billing_name' => 'North Lime Coffee & Doughnuts',
        'billing_street_address' => '575 North Limestone',
        'billing_city' => 'Lexington',
        'billing_state' => 'KY',
        'billing_zip' => '40508',
        'shipping_street_address' => '575 North Limestone',
        'shipping_city' => 'Lexington',
        'shipping_state' => 'KY',
        'shipping_zip' => '40508',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('stores')->insert([
        'name' => 'Clays Mill',
        'order_email_address' => 'claysmill@northlime.net',
        'billing_name' => 'NLCD #2',
        'billing_street_address' => '3101 Clays Mill Rd, Suite 300a',
        'billing_city' => 'Lexington',
        'billing_state' => 'KY',
        'billing_zip' => '40503',
        'shipping_street_address' => '3101 Clays Mill Rd, Suite 300a',
        'shipping_city' => 'Lexington',
        'shipping_state' => 'KY',
        'shipping_zip' => '40503',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('stores')->insert([
        'name' => 'Old Louisville',
        'order_email_address' => 'user',
        'billing_name' => 'user',
        'billing_street_address' => '1228 South Seventh',
        'billing_city' => 'Louisville',
        'billing_state' => 'KY',
        'billing_zip' => '40203',
        'shipping_street_address' => '1228 South Seventh',
        'shipping_city' => 'Louisville',
        'shipping_state' => 'KY',
        'shipping_zip' => '40203',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('stores')->insert([
        'name' => 'Cakery',
        'order_email_address' => 'user',
        'billing_name' => 'user',
        'billing_street_address' => '104 W 6TH STREET',
        'billing_city' => 'Lexington',
        'billing_state' => 'KY',
        'billing_zip' => '40508',
        'shipping_street_address' => '104 W 6TH STREET',
        'shipping_city' => 'Lexington',
        'shipping_state' => 'KY',
        'shipping_zip' => '40508',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
