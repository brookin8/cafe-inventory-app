<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        'name' => 'baking ingredients',
      ]);
      DB::table('categories')->insert([
        'name' => 'toppings',
      ]);
      DB::table('categories')->insert([
        'name' => 'dairy & eggs',
      ]);
       DB::table('categories')->insert([
        'name' => 'beverage ingredients',
      ]);
       DB::table('categories')->insert([
        'name' => 'paper/plastic',
      ]);
       DB::table('categories')->insert([
        'name' => 'coffee',
      ]);
       DB::table('categories')->insert([
        'name' => 'retail',
      ]);
       DB::table('categories')->insert([
        'name' => 'juices',
      ]);
       DB::table('categories')->insert([
        'name' => 'special ingredients',
      ]);
       DB::table('categories')->insert([
        'name' => 'cleaning supplies',
      ]);
       DB::table('categories')->insert([
        'name' => 'equipment',
      ]);
       DB::table('categories')->insert([
        'name' => 'condiments',
      ]);
        DB::table('categories')->insert([
        'name' => 'firstAid',
      ]);
      
    } 
}
