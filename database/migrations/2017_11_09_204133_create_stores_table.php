<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('order_email_address');
            $table->string('billing_name');
            $table->string('billing_street_address');
            $table->string('billing_city');
            $table->string('billing_state',2);
            $table->string('billing_zip',5);
            $table->string('shipping_street_address');
            $table->string('shipping_city');
            $table->string('shipping_state',2);
            $table->string('shipping_zip',5);
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
        Schema::dropIfExists('stores');
    }
}
