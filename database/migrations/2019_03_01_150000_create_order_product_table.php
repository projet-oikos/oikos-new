<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('order_id');
            $table->timestamps();
        });

        Schema::table('order_product', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('product');
        });

        Schema::table('order_product', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('order');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
