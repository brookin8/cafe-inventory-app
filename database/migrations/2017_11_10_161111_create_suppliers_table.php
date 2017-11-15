<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('lead_time_days');
            $table->string('order_email_address');
            $table->string('billing_street_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state',2)->nullable();
            $table->string('billing_zip',5)->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone_number',10)->nullable();
            $table->string('contact_email')->nullable();
            $table->integer('order_method')->unsigned();
            $table->foreign('order_method')->references('id')->on('order_methods');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
