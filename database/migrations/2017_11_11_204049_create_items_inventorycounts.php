<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsInventorycounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_inventorycounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventorycount_id')->unsigned();
            $table->foreign('inventorycount_id')->references('id')->on('inventorycounts')->onDelete('cascade');
            $table->integer('item_id')->unsigned();
            $table->integer('inventorycount_qty')->unsigned();
            $table->decimal('inventory_dollar_amount',8,2)->nullable();
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
        Schema::dropIfExists('items_inventorycounts');
    }
}
