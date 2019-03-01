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
        Schema::create('customers', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('lastname');
                $table->string('name');
                $table->string('email');
                $table->string('telephone');
                $table->string('password');
                $table->unsignedInteger('delivery_address_id');
                $table->unsignedInteger('billing_address_id');
                $table->timestamps();

        });


        DB::table('customers')->insert([

            'lastname' => 'Snider',
            'name' => 'Elizabeth',
            'email' => 'aliquet@eu.co.uk',
            'telephone' => '837-3257',
            'password' => 'WRV72FPP7DU',
            'delivery_address_id' => '1',
            'billing_address_id' => '1',
        ]);

        DB::table('customers')->insert([

            'lastname' => 'Harper',
            'name' => 'Carson',
            'email' => 'justo.Praesent@Pellentesquetincidunt.co.uk',
            'telephone' => '1-841-550-2537',
            'password' => 'IXN44GKT8MO',
            'delivery_address_id' => '2',
            'billing_address_id' => '2',
        ]);

        DB::table('customers')->insert([

            'lastname' => 'Charles',
            'name' => 'Sage',
            'email' => 'tempor@id.edu',
            'telephone' => '251-0106',
            'password' => 'BYT38JQY3DF',
            'delivery_address_id' => '3',
            'billing_address_id' => '3',
        ]);

        DB::table('customers')->insert([

            'lastname' => 'Mercer',
            'name' => 'Rigel',
            'email' => 'Suspendisse.eleifend.Cras@facilisisvitaeorci.com',
            'telephone' => '251-0106',
            'password' => 'BYT38JQY3DF',
            'delivery_address_id' => '4',
            'billing_address_id' => '4',
        ]);

        DB::table('customers')->insert([

            'lastname' => 'Coffey',
            'name' => 'Galvin',
            'email' => 'dui@Morbimetus.net',
            'telephone' => '409-0758',
            'password' => 'WLZ65QFI4GW',
            'delivery_address_id' => '5',
            'billing_address_id' => '5',
        ]);

        DB::table('customers')->insert([

            'lastname' => 'Conrad',
            'name' => 'Yvonne',
            'email' => 'pulvinar.arcu.et@at.co.uk',
            'telephone' => '356-7493',
            'password' => 'IFH49TYG5MT',
            'delivery_address_id' => '6',
            'billing_address_id' => '6',
        ]);

        DB::table('customers')->insert([

            'lastname' => 'Patton',
            'name' => 'Karina',
            'email' => 'urna.nec.luctus@in.ca',
            'telephone' => '507-0513',
            'password' => 'OOP61DDC4GW',
            'delivery_address_id' => '7',
            'billing_address_id' => '7',
        ]);

        DB::table('customers')->insert([

            'lastname' => 'Bradford',
            'name' => 'Jolene',
            'email' => 'dolor.Quisque.tincidunt@Quisquenonummy.edu',
            'telephone' => '674-1392',
            'password' => 'PGN01KSR6MD',
            'delivery_address_id' => '8',
            'billing_address_id' => '8',
        ]);

        DB::table('customers')->insert([

            'lastname' => 'Hammond',
            'name' => 'Charissa',
            'email' => 'sem.ut@dapibusrutrumjusto.ca',
            'telephone' => '1-560-717-0603',
            'password' => 'VRH17KBP0GL',
            'delivery_address_id' => '9',
            'billing_address_id' => '9',
        ]);

        DB::table('customers')->insert([

            'lastname' => 'Decker',
            'name' => 'Indigo',
            'email' => 'ornare.libero@pretium.net',
            'telephone' => '409-8780',
            'password' => 'SHM80OPE2KF',
            'delivery_address_id' => '10',
            'billing_address_id' => '10',
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
