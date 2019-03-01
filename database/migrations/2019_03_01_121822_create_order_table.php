<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('orderDate');
            $table->dateTime('billDate');
            $table->unsignedInteger('iduser');
            $table->timestamps();
        });

        Schema::table('order', function (Blueprint $table) {
            $table->foreign('iduser')->references('id')->on('customers');
        });


        DB::table('order')->insert([
            'orderDate' => Carbon::today(),
            'billDate' => Carbon::today(),
            'iduser' => '1'
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
