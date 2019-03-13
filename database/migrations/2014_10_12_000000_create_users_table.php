<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email', 140)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 140);
            $table->boolean('is_admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'email' => 'aliquet@eu.co.uk',
            'password' => '123456789',
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'email' => 'pablo@callejo.fr',
            'password' => 'patan123',
            'is_admin' => '1'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
