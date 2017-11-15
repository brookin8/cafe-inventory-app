<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'Erin W',
        'email' => 'brookin8@gmail.com',
        'password' => bcrypt('Nikki123'),
        'access_id' => 1,
        'store_id' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}


