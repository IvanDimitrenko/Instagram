<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->id('id');
            $table->string('login', 20)->unique();
            $table->string('email', 40)->unique();
            $table->string('name', 30)->nullable();
            $table->string('password', 20);
            $table->string('ava', 256)->default("/default");
            $table->string('about', 100)->nullable();
            $table->string("gender", 16)->nullable();
            $table->string("gender", 16)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
