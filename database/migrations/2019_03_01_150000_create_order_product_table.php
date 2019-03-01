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
            $table->unsignedInteger('idproduct');
            $table->unsignedInteger('idorder');
            $table->timestamps();
        });

        Schema::table('order_product', function (Blueprint $table) {
            $table->foreign('idproduct')->references('id')->on('product');
        });

        Schema::table('order_product', function (Blueprint $table) {
            $table->foreign('idorder')->references('id')->on('order');
        });


        DB::table('order_product')->insert([
            'quantity' => 2,
            'idproduct' => '1',
            'idorder' => '1',
        ]);
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
