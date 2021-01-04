<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_no');
            $table->string('customer_name');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('area_id');
            $table->string('address');
            $table->string('note');
            $table->integer('payment_type_id');
            $table->tinyInteger('payment_status');
            $table->integer('shipping_type_id');
            $table->tinyInteger('shipping_status');
            $table->double('total_prices');
            $table->dateTime('order_date');
            $table->tinyInteger('order_status');
            $table->timestamps();
            $table->index(['order_no']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
