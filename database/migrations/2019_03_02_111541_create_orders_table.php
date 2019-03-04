<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('order_id');	
            $table->string('product');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('district');
            $table->string('status');
            $table->integer('product_price');
            $table->integer('discount');
            $table->integer('quantity');
            $table->string('bump');
            $table->string('bump_price');
            $table->string('notes');
            $table->string('courier');
            $table->integer('shipping_cost');
            $table->string('receipt_number');
            $table->integer('gross_revenue');
            $table->string('net_revenue');
            $table->string('created_at');
            $table->string('processing_at');
            $table->string('completed_at');
            $table->string('handled_by');
            $table->string('variation');
            $table->string('ship');
            $table->string('bank');
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
