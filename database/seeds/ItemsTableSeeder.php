<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *1 =ea, 2= cs
     * @return void
     */
    public function run()
    {
      DB::table('items')->insert([
      'name' => 'SUGAR SUBSTITUTE PACKET YELLOW',
      'supplier_item_identifier' => '5817251',
      'cost' => 36.13,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 12,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'SANITIZER OASIS 146 MULTI QUAT',
      'supplier_item_identifier' => '7006331',
      'cost' => 97.53,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 10,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'ORANGE JUICE- PREMIUM, NO PULP',
      'supplier_item_identifier' => '4808952',
      'cost' => 42.30,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 8,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'SUGAR - ORGANIC RAW',
      'supplier_item_identifier' => '4212504',
      'cost' => 34.89,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 12,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'VANILLA EXTRACT PURE',
      'supplier_item_identifier' => '5230040',
      'cost' => 36.44,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'TOILET TISSUE WRAPPED 4" X 3.75" 2 PLY',
      'supplier_item_identifier' => '1993862',
      'cost' => 64.47,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'CLEANER FLOOR OASIS 115XP',
      'supplier_item_identifier' => '5926324',
      'cost' => 72.88,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 10,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'BUTTERMILK REGULAR',
      'supplier_item_identifier' => '2624934',
      'cost' => 24.69,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 10,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'PAPER BAG-WHITE 4#',
      'supplier_item_identifier' => '1593997',
      'cost' => 11.95,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "TOPPING M&M'S PLAIN CHOPPED",
      'supplier_item_identifier' => '7217490',
      'cost' => 46.01,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "PECAN PIECES FANCY MEDIUM",
      'supplier_item_identifier' => '7217490',
      'cost' => 68.73,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "BAND EMERGENCY AID STRIP",
      'supplier_item_identifier' => '3734654',
      'cost' => 40.84,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 13,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "COCONUT SNOWFLAKE SWEETENED",
      'supplier_item_identifier' => '4510921',
      'cost' => 29.80,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "PIZZA BOX CUSTOM PRINT - Large",
      'supplier_item_identifier' => '3473170',
      'cost' => 26.39,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "GLOVE POLY EMBOSSED FOODSERVICE LARGE",
      'supplier_item_identifier' => '8348740',
      'cost' => 33.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "STIRRER COFFEE WOOD 7.5",
      'supplier_item_identifier' => '2104998',
      'cost' => 31.67,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 12,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "SYSCO JOE-TO-GO",
      'supplier_item_identifier' => '934109',
      'cost' => 98.35,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "FROZEN BLUEBERRIES",
      'supplier_item_identifier' => '1359496',
      'cost' => 26.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 9,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'WRAP DRY WAX DELI 10" X 10.75"',
      'supplier_item_identifier' => '444042',
      'cost' => 32.68,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "COOKIE CRUMBS OREO MEDIUM CRUNCH",
      'supplier_item_identifier' => '5524137',
      'cost' => 100.05,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "SPRINKLES RAINBOW",
      'supplier_item_identifier' => '6044614',
      'cost' => 29.68,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "SALT - PLAIN",
      'supplier_item_identifier' => '4552840',
      'cost' => 8.33,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "CUP - PAPER HOT CUSTOM",
      'supplier_item_identifier' => '7024984',
      'cost' => 58.30,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "BAG PAPER BROWN 6#",
      'supplier_item_identifier' => '1594060',
      'cost' => 11.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);


       DB::table('items')->insert([
      'name' => "YEAST INSTANT DIRECT",
      'supplier_item_identifier' => '4637864',
      'cost' => 70.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items')->insert([
      'name' => "CREAMER HALF & HALF",
      'supplier_item_identifier' => '4828554',
      'cost' => 35.13,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 3,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "SHORTENING SOLID ALL PURPOSE",
      'supplier_item_identifier' => '2452575',
      'cost' => 54.49,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "TOPPING MARSHMALLOW CONCENTRATE",
      'supplier_item_identifier' => '416578',
      'cost' => 30.80,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items')->insert([
      'name' => "PIZZA BOX CUSTOM PRINT - Small",
      'supplier_item_identifier' => '3476379',
      'cost' => 19.26,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

         DB::table('items')->insert([
      'name' => "LIME JUICE",
      'supplier_item_identifier' => '3865730',
      'cost' => 26.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 8,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

         DB::table('items')->insert([
      'name' => "GRAHAM CRACKER HONEY",
      'supplier_item_identifier' => '416578',
      'cost' => 35.45,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items')->insert([
      'name' => "MILK SKIM GALLON",
      'supplier_item_identifier' => '4665792',
      'cost' => 16.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 3,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "BROWN SUGAR LIGHT CANE",
      'supplier_item_identifier' => '1854926',
      'cost' => 40.92,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items')->insert([
      'name' => "DETERGENT POT & PAN LIQUID SCOUT",
      'supplier_item_identifier' => '3522240',
      'cost' => 132.32,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 10,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => "FLOUR BLEACHED ENRICHED",
      'supplier_item_identifier' => '8377935',
      'cost' => 18.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items')->insert([
      'name' => "PAD SCOUR PURPLE SCRUBBER",
      'supplier_item_identifier' => '5055068',
      'cost' => 18.89,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 10,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => "SPICE CINNAMON GROUND",
      'supplier_item_identifier' => '5285267',
      'cost' => 164.84,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items')->insert([
      'name' => "SOAP HAND CLEAN & SMOOTH LIQUID",
      'supplier_item_identifier' => '2694319',
      'cost' => 40.12,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 10,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "CREAM CHEESE LOAF",
      'supplier_item_identifier' => '1012566',
      'cost' => 65.84,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 3,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "BUTTERMILK BLEND BAKING",
      'supplier_item_identifier' => '4232961',
      'cost' => 29.52,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 3,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "BUTTER SOLID UNSALTED",
      'supplier_item_identifier' => '5926910',
      'cost' => 101.97,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 3,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "CREAM HEAVY WHIPPING",
      'supplier_item_identifier' => '4828802',
      'cost' => 64.30,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 3,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "CONFECTIONER SUGAR",
      'supplier_item_identifier' => '5825672',
      'cost' => 34.85,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "BACON BITS REAL COOKED",
      'supplier_item_identifier' => '2548162',
      'cost' => 62.50,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

        DB::table('items')->insert([
      'name' => 'CUP BAKING PAPER 2" X 1.25" FLUTED',
      'supplier_item_identifier' => '2137913',
      'cost' => 19.24,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "FLOUR ALL PURPOSE HOTEL & RESTAURANT BLEACHED ENRICHED",
      'supplier_item_identifier' => '8378111',
      'cost' => 19.34,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "EGG SHELL LARGE WHITE GRADE A USDA",
      'supplier_item_identifier' => '1210673',
      'cost' => 26.84,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 3,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "PEANUT BUTTER CREAMY",
      'supplier_item_identifier' => '4009189',
      'cost' => 68.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 9,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "PAN LINER",
      'supplier_item_identifier' => '7157365',
      'cost' => 52.71,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'FILTER COFFEE TEA 1.5 GAL',
      'supplier_item_identifier' => '5950688',
      'cost' => 15.74,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
   	

       DB::table('items')->insert([
      'name' => "BAKING POWDER",
      'supplier_item_identifier' => '5517701',
      'cost' => 81.89,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "MILK HOMOGENIZED GALLON",
      'supplier_item_identifier' => '4665812',
      'cost' => 14.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 3,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "FLOUR - GLUTEN FREE (DROP SHIP)",
      'supplier_item_identifier' => '811804',
      'cost' => 63.69,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => "COCOA POWDER 10-12% BUTTERFAT",
      'supplier_item_identifier' => '5792684',
      'cost' => 127.87,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
   		
   	DB::table('items')->insert([
      'name' => "PUMPKIN SOLID PACK FANCY",
      'supplier_item_identifier' => '4111498',
      'cost' => 50.25,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 9,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => "PEACHES SLICED INDIVIDUALLY QUICK FROZEN",
      'supplier_item_identifier' => '1024348',
      'cost' => 30.84,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 9,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'TRASH LINER 33" X 39" 1.5ML BLACK',
      'supplier_item_identifier' => '1763192',
      'cost' => 19.38,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 10,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'PECAN PIECES MEDIUM CHOPPED RAW',
      'supplier_item_identifier' => '3424704',
      'cost' => 59.17,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

       DB::table('items')->insert([
      'name' => 'LABEL ROLL WATERPROOF (DROP SHIP)',
      'supplier_item_identifier' => '6198752',
      'cost' => 22.13,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'GLOVE FOODSERVICE EXTRA-LARGE',
      'supplier_item_identifier' => '1522600',
      'cost' => 61.10,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'PAPER TOWEL 9" X 11" 2-PLY JUMBO',
      'supplier_item_identifier' => '1992603',
      'cost' => 25.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 10,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'GLOVE NITRILE MEDIUM BLUE',
      'supplier_item_identifier' => '2306753',
      'cost' => 58.88,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'LINER ROLL 24" X 24" 6 MICRON NATURAL',
      'supplier_item_identifier' => '5595806',
      'cost' => 22.47,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'CHOCOLATE CHIPS 4000 COUNT',
      'supplier_item_identifier' => '5335724',
      'cost' => 72.27,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 9,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'GLOVE NITRILE LARGE BLUE',
      'supplier_item_identifier' => '2306775',
      'cost' => 57.35,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'WALNUT HALVES & PIECES',
      'supplier_item_identifier' => '4888574',
      'cost' => 38.81,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 2,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

       DB::table('items')->insert([
      'name' => 'SUGAR GRANULATED EXTRA-FINE CANE',
      'supplier_item_identifier' => '4782694',
      'cost' => 33.53,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 1,
      'supplier_id' => 3,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'White Hot Cup - 12 oz',
      'supplier_item_identifier' => '100-254',
      'cost' => 66.03,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'White Hot Cup - 16 oz',
      'supplier_item_identifier' => '100-253',
      'cost' => 76.35,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'White Hot Cup - 20 oz',
      'supplier_item_identifier' => '100-257',
      'cost' => 56.60,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Traveler Hot Lid - White',
      'supplier_item_identifier' => '120-251',
      'cost' => 34.19,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Traveler Hot Lid - Black',
      'supplier_item_identifier' => '120-263',
      'cost' => 34.19,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Cold Flat Lid',
      'supplier_item_identifier' => '120-826',
      'cost' => 26.20,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Cold Cup - 20 oz',
      'supplier_item_identifier' => '101-719',
      'cost' => 65.27,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Cold Cup - 16 oz',
      'supplier_item_identifier' => '964-440',
      'cost' => 85.25,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Cold Cup - 12 oz',
      'supplier_item_identifier' => '964-412',
      'cost' => 26.20,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Drink Carrier',
      'supplier_item_identifier' => '218-400',
      'cost' => 75.26,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => 'Dome Lid',
      'supplier_item_identifier' => '120-440',
      'cost' => 78.64,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Wood Stir Sticks',
      'supplier_item_identifier' => 'RPP-R825',
      'cost' => 7.08,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Joe-to-Go',
      'supplier_item_identifier' => '967-814',
      'cost' => 76.41,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 5,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'After Midnight 1 lb',
      'supplier_item_identifier' => 'After Midnight 1 lb',
      'cost' => 13.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'After Midnight 4 lb',
      'supplier_item_identifier' => 'After Midnight 4 lb',
      'cost' => 50.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Murph 1 lb',
      'supplier_item_identifier' => 'Murph 1 lb',
      'cost' => 13.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Murph 4 lb',
      'supplier_item_identifier' => 'Murph 4 lb',
      'cost' => 50.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Costa Rica 1 lb',
      'supplier_item_identifier' => 'Costa Rica 1 lb',
      'cost' => 13.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Costa Rica 4 lb',
      'supplier_item_identifier' => 'Costa Rica 4 lb',
      'cost' => 58.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Colombia 1 lb',
      'supplier_item_identifier' => 'Colombia 1 lb',
      'cost' => 13.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Colombia 4 lb',
      'supplier_item_identifier' => 'Colombia 4 lb',
      'cost' => 50.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Kenya 1 lb',
      'supplier_item_identifier' => 'Kenya 1 lb',
      'cost' => 14.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Kona 1/2 lb',
      'supplier_item_identifier' => 'Kona 1/2 lb',
      'cost' => 25.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Bali Blue Moon 1 lb',
      'supplier_item_identifier' => 'Bali Blue Moon 1 lb',
      'cost' => 14.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Bali Blue Moon 4 lb',
      'supplier_item_identifier' => 'Bali Blue Moon 4 lb',
      'cost' => 54.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Blue & White 1 lb',
      'supplier_item_identifier' => 'Blue&White 1 lb',
      'cost' => 15.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Decaf 1 lb',
      'supplier_item_identifier' => 'Decaf 1 lb',
      'cost' => 14.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => "Decaf 4 lb",
      'supplier_item_identifier' => 'Decaf 4 lb',
      'cost' => 14.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'El Salvador 1 lb',
      'supplier_item_identifier' => 'El Salvador 1 lb',
      'cost' => 13.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'El Salvador 4 lb',
      'supplier_item_identifier' => 'El Salvador 4 lb',
      'cost' => 50.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Espresso 1 lb',
      'supplier_item_identifier' => 'Espresso 1 lb',
      'cost' => 14.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Espresso 4 lb',
      'supplier_item_identifier' => 'Espresso 4 lb',
      'cost' => 54.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Espresso 12 lb Bucket',
      'supplier_item_identifier' => 'Espresso 12 lb Bucket',
      'cost' => 160.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Ethiopian Harar 1 lb',
      'supplier_item_identifier' => 'Ethiopian Harar 1 lb',
      'cost' => 15.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Guatemala 1 lb',
      'supplier_item_identifier' => 'Guatemala 1 lb',
      'cost' => 13.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Guatemala 4 lb',
      'supplier_item_identifier' => 'Guatemala 4 lb',
      'cost' => 50.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Cold Brew 5 lb Bucket',
      'supplier_item_identifier' => 'Cold Brew 5 lb bucket',
      'cost' => 13.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

      DB::table('items')->insert([
      'name' => 'Sumatra 1 lb',
      'supplier_item_identifier' => 'Sumatra 1 lb',
      'cost' => 14.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Sumatra 4 lb',
      'supplier_item_identifier' => 'Sumatra 4 lb',
      'cost' => 54.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);		

      DB::table('items')->insert([
      'name' => 'Scary 1/2 lb',
      'supplier_item_identifier' => 'Scary 1/2 lb',
      'cost' => 12.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => 'Yo Wake Up 1 lb',
      'supplier_item_identifier' => 'Yo Wake Up 1 lb',
      'cost' => 13.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => "Nate's Sleeves",
      'supplier_item_identifier' => 'Sleeves',
      'cost' => 150.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 6,
      'supplier_id' => 2,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);	

      DB::table('items')->insert([
      'name' => "Kids Old Bean Tee Blue & Orange",
      'supplier_item_identifier' => 'Kids Old Bean Tee Blue & Orange',
      'cost' => 6.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 4,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Old Bean Tee- Athletic Blue",
      'supplier_item_identifier' => 'Old Bean Split Ftn on Heather Athletic Blue',
      'cost' => 6.95,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 4,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Old Bean Baseball Tee - Olive Green",
      'supplier_item_identifier' => 'Old Bean Baseball Tee with Custom Olive Green',
      'cost' => 6.95,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 4,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Old Bean Tee - Orange and Grey",
      'supplier_item_identifier' => 'Old Bean Orange on Grey Tee',
      'cost' => 6.95,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 4,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Old Bean Tee - Purple on Purple",
      'supplier_item_identifier' => 'Old Bean Tee Purple on Purple',
      'cost' => 6.95,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 4,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Old Bean Tee - Aqua on Coral",
      'supplier_item_identifier' => 'Old Bean Aqua on Coral',
      'cost' => 6.95,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 4,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Old Bean Tee - Black on Aqua",
      'supplier_item_identifier' => 'Old Bean design on Coral Tees/Bright green Ink',
      'cost' => 6.95,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 4,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Pollen Plastic Bottle - 8 oz",
      'supplier_item_identifier' => 'Honey Bee 100% Pollen - Plastic Bottle 8oz.',
      'cost' => 8.50,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Pollen Teddy Bear - 2 oz",
      'supplier_item_identifier' => 'Honey Bee 100% Pollen - Plastic Teddy Bear 2oz.',
      'cost' => 2.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Bourbon Barrel Maple Syrup - 1.7 oz",
      'supplier_item_identifier' => 'KHF - Bourbon Barrel Maple Syrup 1.7 oz',
      'cost' => 4.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Bourbon Barrel Maple Syrup - 3.4 oz",
      'supplier_item_identifier' => 'KHF - Bourbon Barrel Maple Syrup 3.4 oz',
      'cost' => 7.50,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Bourbon Barrel Maple Syrup - 8 oz",
      'supplier_item_identifier' => 'KHF - Bourbon Barrel Maple Syrup 8 oz',
      'cost' => 10.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Bourbon Apple Butter",
      'supplier_item_identifier' => 'KHF - Bourbon Apple Butter 16 oz',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Bourbon Barbecue Sauce",
      'supplier_item_identifier' => 'KHF - Bourbon Barbecue Sauce 16 oz',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Honey Bourbon Balls",
      'supplier_item_identifier' => 'KY Honey Farms - Honey Bourbon Balls 3.5 oz',
      'cost' => 3.75,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Wild Flower Honeystix - .15oz (Each) ",
      'supplier_item_identifier' => 'KY Honey Farms - Wild Flower Honeystix (Each) .15oz',
      'cost' => .20,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Regular Honeystix - 1.6 oz (10 pack)",
      'supplier_item_identifier' => 'KY Honey Farms - Pure Honey Honeystix (10 pack) 1.6oz',
      'cost' => 2.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

       DB::table('items')->insert([
      'name' => "Clover Honey Teddy Bear - 3 oz",
      'supplier_item_identifier' => 'KY Honey Farms - Clover Honey Plastic Teddy Bear 3 oz',
      'cost' => 2.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
		
		DB::table('items')->insert([
      'name' => "Clover Honey Plastic Bottle - 8 oz",
      'supplier_item_identifier' => 'KY Honey Farms - Clover Honey Plastic Squeeze Bottle 8 oz',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Clover Honey Plastic Bottle - 16 oz",
      'supplier_item_identifier' => 'KY Honey Farms - Clover Honey Plastic Squeeze Bottle 16 oz',
      'cost' => 9.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Gift Pack - Bourbon Honey / Peanut Butter",
      'supplier_item_identifier' => 'KHF - Gift Pack - Bourbon Honey 11oz. / Peanut Butter 11oz.',
      'cost' => 15.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Gift Pack - Whipped Cinnamon / Whipped Wildflower",
      'supplier_item_identifier' => 'KHF - Gift Pack - Whipped Cinnamon / Whipped Wildflower',
      'cost' => 12.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Bourbon Honey - Glass Jar 22 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Bourbon Honey - Glass Pint Mason Jar 22 oz',
      'cost' => 15.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Bourbon Honey - Glass Jar 11 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Bourbon Honey - Glass 1/2 Pint Jar 11 oz',
      'cost' => 9.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Bourbon Honey - Plastic Bottle 11 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Bourbon Honey - Plastic Squeeze Bottle 11 oz',
      'cost' => 9.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Bourbon Honey - Plastic Bottle 8 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Bourbon Honey - Plastic Squeeze Bottle 8 oz',
      'cost' => 9.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Habanero Honey - Plastic Bottle 8 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Habanero Honey - Plastic Squeeze Bottle',
      'cost' => 7.50,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Habanero Honey - Glass Jar 11 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Habanero Honey - Glass 1/2 Pint Jar',
      'cost' => 9.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Whipped Honey - Peanut Butter 11 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Whipped Honey - Peanut Butter - Glass  ',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Whipped Honey - Bourbon 5.5 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Whipped Honey - Bourbon - Glass',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Whipped Honey - Blackberry 5.5 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Whipped Honey - Blackberry - Glass',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Whipped Honey - Raspberry 5.5 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Whipped Honey - Raspberry - Glass',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Whipped Honey - Wildflower 5.5 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Whipped Honey - Wildflower - Glass',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Whipped Honey - Cocoa 5.5 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Whipped Honey - Cocoa - Glass',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Whipped Honey - Cinnamon 5.5 oz",
      'supplier_item_identifier' => 'KHF - Kentucky Whipped Honey - Cinnamon - Glass',
      'cost' => 6.00,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 7,
      'supplier_id' => 7,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "White Chocolate Drink Mix - 3.5 lb",
      'supplier_item_identifier' => 'Big Train 20 Below Frozen White Chocolate 3.5 lb. Bag(s)',
      'cost' => 21.11,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Chai Powder (Tiger Spice) - 4 lb",
      'supplier_item_identifier' => 'David Rio Tiger Spice Chai 4 lb. Bag(s)',
      'cost' => 29.27,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "FoamAroma Hot Lid - Black",
      'supplier_item_identifier' => 'FoamAroma Black Lid for 10 - 24 oz. cups Case(s) of 1,000 Lids',
      'cost' => 51.74,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "White Syrup Pump (Monin) 1 L Bottles",
      'supplier_item_identifier' => 'Monin White Syrup Pump for Monin 1 Liter Bottles',
      'cost' => 2.04,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 5,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "White Syrup Pump (Monin) 750 ml Bottles",
      'supplier_item_identifier' => 'Monin White Syrup Pump for Monin 750 ml Bottles',
      'cost' => 2.04,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 5,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
     
		DB::table('items')->insert([
      'name' => "Lavender Syrup (Monin) 750 ml",
      'supplier_item_identifier' => 'Monin Lavender Syrup 750 ml Bottle',
      'cost' => 7.23,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "White Chocolate Sauce (Monin) 64 oz",
      'supplier_item_identifier' => 'Monin White Chocolate Sauce 64 oz. Bottle(s)',
      'cost' => 14.40,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Caramel Sauce (Monin) 64 oz",
      'supplier_item_identifier' => 'Monin Caramel Sauce 64 oz. Bottle(s)',
      'cost' => 14.40,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Dark Chocolate Sauce (Monin) 64 oz",
      'supplier_item_identifier' => 'Monin Dark Chocolate Sauce 64 oz. Bottle(s)',
      'cost' => 13.34,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Lavender Syrup (Monin) 750 ml",
      'supplier_item_identifier' => 'Monin Lavender Syrup 750 ml Bottle(s)',
      'cost' => 7.23,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Cinnamon Bun Syrup (Monin) 750 ml",
      'supplier_item_identifier' => 'Monin Cinnamon Bun Syrup 750 ml Bottle(s)',
      'cost' => 6.99,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Sugar Free Caramel Syrup (Monin) 1 L",
      'supplier_item_identifier' => 'Monin Sugar Free Caramel Syrup 1 Liter Bottle(s)',
      'cost' => 9.47,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Peppermint Bark Sauce (Torani) 1/2",
      'supplier_item_identifier' => 'Torani Peppermint Bark Sauce 1/2 Gallon Bottle(s)',
      'cost' => 18.33,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Bourbon Caramel Syrup (Torani) 750 ml",
      'supplier_item_identifier' => 'Torani Bourbon Caramel Syrup 750 ml Bottle(s)',
      'cost' => 6.16,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Pumpkin Pie Sauce (Torani) 1/2 Gallon",
      'supplier_item_identifier' => 'Torani Pumpkin Pie Sauce 1/2 Gallon Bottle(s)',
      'cost' => 18.33,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Torani Sauce Pump",
      'supplier_item_identifier' => 'Torani Sauce Pump(s) for the Torani Sauces - Dispense 1/2 oz.',
      'cost' => 5.10,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 5,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Cold Brew Strainer (Toddy)",
      'supplier_item_identifier' => 'Toddy Coffee Maker COMMERCIAL STRAINER BAG Nylon Strainer Bag',
      'cost' => 8.50,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 5,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "1883 Pumps",
      'supplier_item_identifier' => '1883 Pumps',
      'cost' => 2.50,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 5,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "French Vanilla Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 French Vanilla Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Hazelnut Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Hazelnut Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Toasted Marshmallow Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Toasted Marshmallow Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Toffee Crunch Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Toffee Crunch Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Cinnamon (1883) 1 L",
      'supplier_item_identifier' => '1883 Cinnamon Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Raspberry Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Raspberry Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Blueberry Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Blueberry Syrup 1 Liter Bottle(s)',
      'cost' => 9.97,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Sugar Free Vanilla Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Sugar Free Vanilla Syrup 1 Liter Bottle(s)',
      'cost' => 9.50,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Cane Sugar Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Cane Sugar Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Irish Cream Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Irish Cream Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Strawberry Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Strawberry Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Banana Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Banana Syrup 1 Liter Bottle(s)',
      'cost' => 9.97,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Cherry Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Cherry Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Coconut Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Coconut Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Blackberry Syrup (1883) 1 L",
      'supplier_item_identifier' => '1883 Blackberry Syrup 1 Liter Bottle(s)',
      'cost' => 9.25,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 4,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);


		DB::table('items')->insert([
      'name' => "Espresso Machine Cleaning Liquid (Urnex) 1 L",
      'supplier_item_identifier' => 'Urnex Full Circle™ Espresso Machine Milk Cleaning Liquid 1 Liter Bottle(s)',
      'cost' => 18.90,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 10,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Cafiza Espresso Machine Cleaner (Urnex) 20 oz",
      'supplier_item_identifier' => 'Urnex Cafiza® Espresso Machine Cleaner 20 oz. Jar',
      'cost' => 12.30,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 10,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Grindz Cleaner (Urnex) 430 g",
      'supplier_item_identifier' => 'Urnex Grindz™ Grinder Cleaner 430 g Jar',
      'cost' => 35.38,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 10,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Espresso Machine Group Head Brush Steel Bristle (Urnex)",
      'supplier_item_identifier' => 'Urnex 7" Espresso Machine Group Head Brush, Plastic Handle, Steel Bristle',
      'cost' => 4.05,
      'edited_by' => 1,
      'uom_id' => 1,
      'category_id' => 10,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);

		DB::table('items')->insert([
      'name' => "Java Jacket Sleeves",
      'supplier_item_identifier' => 'Java Jacket Large Pre-Assembled Natural (12oz-20oz) Case of 1,300 Jackets',
      'cost' => 61.00,
      'edited_by' => 1,
      'uom_id' => 2,
      'category_id' => 5,
      'supplier_id' => 1,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
    }
}
