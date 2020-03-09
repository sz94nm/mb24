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
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(
            array(
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password'=>Hash::make('hashed'),
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'saif',
                'email' => 'saif@gmail.com',
                'password'=>'password'
            ),
	array(
                'name' => 'mary',
                'email' => 'mary@gmail.com',
                'password'=>'password'
            ),
	array(
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password'=>'password'
            ),
        );
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
