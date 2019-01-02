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
            $table->integer('sedula')->unique();
            $table->string('username', 10)->unique();
            $table->string('lastname', 50);
            $table->string('maidenname', 50)->nullable();
            $table->string('firstname', 50);
            $table->string('gender', 5);
            $table->date('birthday');
            $table->string('birthplace', 30);
            $table->string('nationality', 30);
            $table->string('address', 50);
            $table->string('maritalstatus', 10);
            $table->integer('tel_home')->nullable();
            $table->integer('tel_mobile')->nullable();
            $table->string('email_internal', 30);
            $table->string('email_private', 30)->nullable();
            $table->string('driverslicense', 4)->nullable();
            $table->integer('total_kids');
            $table->string('role');
            $table->string('status', 10);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
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
