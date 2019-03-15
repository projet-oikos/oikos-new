<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('lastname');
            $table->string('name');
            $table->string('phone');
            $table->unsignedInteger('user_id')->nullable();
            // $table->unsignedInteger('delivery_address_id')->nullable();
            // $table->unsignedInteger('billing_address_id')->nullable();
            $table->timestamps();
        });

        Schema::table('customer', function (Blueprint $table) {
            // $table->foreign('billing_address_id')->references('id')->on('address');
            //  $table->foreign('delivery_address_id')->references('id')->on('address');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });


        DB::table('customer')->insert([

            'lastname' => 'Snider',
            'name' => 'Elizabeth',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Harper',
            'name' => 'Carson',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Charles',
            'name' => 'Sage',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Mercer',
            'name' => 'Rigel',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Coffey',
            'name' => 'Galvin',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
