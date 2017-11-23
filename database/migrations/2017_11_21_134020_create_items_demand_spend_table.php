<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateItemsDemandSpendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_demand', function (Blueprint $table) {
            $table->increments('id');
            $table->date('week');
            $table->integer('item_id');
            $table->integer('store_id');
            $table->integer('demand')->nullable()->default(null);
            $table->decimal('cost', 10, 2)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_demand');
    }
}
