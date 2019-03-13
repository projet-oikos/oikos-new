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
                $table->engine='InnoDB';
                $table->increments('id');
                $table->string('lastname');
                $table->string('name');
                $table->string('phone');
                $table->unsignedInteger('user_id')->nullable();
                $table->unsignedInteger('delivery_address_id');
                $table->unsignedInteger('billing_address_id');
                $table->timestamps();

        });

        Schema::table('customer', function (Blueprint $table) {
            $table->foreign('billing_address_id')->references('id')->on('address');
            $table->foreign('delivery_address_id')->references('id')->on('address');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });


        DB::table('customer')->insert([

            'lastname' => 'Snider',
            'name' => 'Elizabeth',
            'delivery_address_id' => '1',
            'billing_address_id' => '1',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Harper',
            'name' => 'Carson',
            'delivery_address_id' => '2',
            'billing_address_id' => '2',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Charles',
            'name' => 'Sage',
            'delivery_address_id' => '3',
            'billing_address_id' => '3',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Mercer',
            'name' => 'Rigel',
            'delivery_address_id' => '4',
            'billing_address_id' => '4',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Coffey',
            'name' => 'Galvin',
            'delivery_address_id' => '5',
            'billing_address_id' => '5',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Conrad',
            'name' => 'Yvonne',
            'delivery_address_id' => '6',
            'billing_address_id' => '6',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Patton',
            'name' => 'Karina',
            'delivery_address_id' => '7',
            'billing_address_id' => '7',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Bradford',
            'name' => 'Jolene',
            'delivery_address_id' => '8',
            'billing_address_id' => '8',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Hammond',
            'name' => 'Charissa',
            'delivery_address_id' => '9',
            'billing_address_id' => '9',
            'phone' => '0606060606',
            'user_id' => '1'
        ]);

        DB::table('customer')->insert([

            'lastname' => 'Decker',
            'name' => 'Indigo',
            'delivery_address_id' => '10',
            'billing_address_id' => '10',
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
