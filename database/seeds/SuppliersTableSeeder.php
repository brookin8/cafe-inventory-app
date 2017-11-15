<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('suppliers')->insert([
      'name' => 'Barista Pro',
      'lead_time_days' => 1,
      'order_email_address' => 'email',
      'billing_street_address' => 'street',
      'billing_city' => 'city',
      'billing_state' => 'ST',
      'billing_zip' => 55555,
      'contact_name' => 'name',
      'contact_phone_number' => '5555555555',
      'contact_email' => 'email',
      'order_method' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('suppliers')->insert([
      'name' => "Nate's Coffee",
      'lead_time_days' => 7,
      'order_email_address' => 'natescoffee@gmail.com',
      'billing_street_address' => 'P.O. Box 23093',
      'billing_city' => 'Lexington',
      'billing_state' => 'KY',
      'billing_zip' => '40523',
      'contact_name' => 'Nate',
      'contact_phone_number' => '8592271310',
      'contact_email' => 'natescoffee@gmail.com',
      'order_method' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('suppliers')->insert([
      'name' => 'Sysco',
      'lead_time_days' => 1,
      'order_email_address' => 'none',
      'billing_street_address' => '7705 National Turnpike',
      'billing_city' => 'Louisville',
      'billing_state' => 'KY',
      'billing_zip' => '40214',
      'contact_name' => 'Emily',
      'contact_phone_number' => '5555555555',
      'contact_email' => 'ganahl.emily@lou.sysco.com',
      'order_method' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('suppliers')->insert([
      'name' => 'Giant Robot',
      'lead_time_days' => 7,
      'order_email_address' => 'logan@thegiantrobot.com',
      'billing_street_address' => '2091 Rambler Rd.',
      'billing_city' => 'Lexington',
      'billing_state' => 'KY',
      'billing_zip' => '40503',
      'contact_name' => 'Logan',
      'contact_phone_number' => '6063126199',
      'contact_email' => 'logan@thegiantrobot.com',
      'order_method' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('suppliers')->insert([
      'name' => 'Baumann',
      'lead_time_days' => 1,
      'order_email_address' => 'justin.palmer@baumannpaper.com',
      'billing_street_address' => '1601 Baumann Rd',
      'billing_city' => 'Lexington',
      'billing_state' => 'KY',
      'billing_zip' => '40511',
      'contact_name' => 'Justin Palmer',
      'contact_phone_number' => '2702276499',
      'contact_email' => 'justin.palmer@baumannpaper.com',
      'order_method' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('suppliers')->insert([
      'name' => "Dee's Nutz",
      'lead_time_days' => 7,
      'order_email_address' => 'wholesale.deeznutzcompany@gmail.com',
      'billing_street_address' => '481 Joseph Bryan way',
      'billing_city' => 'Lexington',
      'billing_state' => 'KY',
      'billing_zip' => '40514',
      'contact_name' => 'none',
      'contact_phone_number' => '8594556340',
      'contact_email' => 'wholesale.deeznutzcompany@gmail.com',
      'order_method' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('suppliers')->insert([
      'name' => "Kentucky Honey",
      'lead_time_days' => 3,
      'order_email_address' => 'morganstv01@gmail.com',
      'billing_street_address' => 'P.O. Box 4263, 217 N Winter St',
      'billing_city' => 'Midway',
      'billing_state' => 'KY',
      'billing_zip' => '40347',
      'contact_name' => 'Steve',
      'contact_phone_number' => '8595521377',
      'contact_email' => 'morganstv01@gmail.com',
      'order_method' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('suppliers')->insert([
      'name' => 'Dillanos Coffee Roasters',
      'lead_time_days' => 7,
      'order_email_address' => 'janeto@dillanos.com',
      'billing_street_address' => '1607 45th St. East',
      'billing_city' => 'Sumner',
      'billing_state' => 'WA',
      'billing_zip' => '98390',
      'contact_name' => 'Janet Oiseth',
      'contact_phone_number' => '8002345282',
      'contact_email' => 'janeto@dillanos.com',
      'order_method' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
