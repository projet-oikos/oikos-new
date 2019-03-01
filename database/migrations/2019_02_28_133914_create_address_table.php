<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('number');
            $table->string('address');
            $table->string('complement');
            $table->unsignedInteger('nap');
            $table->string('city');
            $table->string('country');
            //$table->unsignedInteger('idUtilisateur');
            $table->timestamps();
        });

       // Schema::table('address', function (Blueprint $table) {
        //    $table->foreign('idUtilisateur')->references('id')->on('utilisateur');
       // });


        DB::table('address')->insert([
            'number' => 12,
            'address' => 'rue de la paix',
            'complement' => '',
            'nap' => '74000',
            'city' => 'Annecy',
            'country' => 'France',
        ]);



        DB::table('address')->insert([
            'number' => 49,
            'address' => 'rue des jonquilles',
            'complement' => '',
            'nap' => '74600',
            'city' => 'Seynod',
            'country' => 'France',
        ]);

        DB::table('address')->insert([
            'number' => 32,
            'address' => 'rue pouet pouet',
            'complement' => '',
            'nap' => '69001',
            'city' => 'Lyon',
            'country' => 'France',
        ]);

        DB::table('address')->insert([
            'number' => 3,
            'address' => 'allée des bolos',
            'complement' => '',
            'nap' => '75000',
            'city' => 'Paris',
            'country' => 'France',
        ]);

        DB::table('address')->insert([
            'number' => 73,
            'address' => 'avenue Jean Moulin',
            'complement' => '',
            'nap' => '13001',
            'city' => 'Marseille',
            'country' => 'France',
        ]);

        DB::table('address')->insert([
            'number' => 24,
            'address' => 'rue pipo',
            'complement' => '',
            'nap' => '33000',
            'city' => 'Bordeau',
            'country' => 'France',
        ]);

        DB::table('address')->insert([
            'number' => 15,
            'address' => 'rue des accacias',
            'complement' => '',
            'nap' => '74000',
            'city' => 'Annecy',
            'country' => 'France',
        ]);


        DB::table('address')->insert([
            'number' => 1652,
            'address' => 'avenue de Bamako',
            'complement' => '',
            'nap' => '35890',
            'city' => 'Bourg la vilaine',
            'country' => 'France',
        ]);

        DB::table('address')->insert([
            'number' => 62,
            'address' => 'rue Henri Lapince',
            'complement' => '',
            'nap' => '74940',
            'city' => 'Annecy le vieux',
            'country' => 'France',
        ]);

        DB::table('address')->insert([
            'number' => 8,
            'address' => 'impasse de la villette',
            'complement' => '',
            'nap' => '59000',
            'city' => 'Lille',
            'country' => 'France',
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
