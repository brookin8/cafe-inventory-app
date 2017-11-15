<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(AccessLevelsTableSeeder::class);
    	$this->call(StoresTableSeeder::class);	
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(OrderMethodsTableSeeder::class);
        $this->call(UomsTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
    }
}
