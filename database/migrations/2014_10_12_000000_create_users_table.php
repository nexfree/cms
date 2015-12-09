<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('username', 70);
            $table->string('password', 70);
            $table->string('first_name', 70);
            $table->string('last_name', 70);
            $table->enum('type', ['admin', 'user']);
            $table->string('email')->unique();
            $table->string('phone', 11);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('users');
    }
}
