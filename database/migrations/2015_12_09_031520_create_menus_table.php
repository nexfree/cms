<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenusTable extends Migration {
    public function up() {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('text');
            $table->string('link');
            $table->tinyInteger('order');
            $table->timestamps();
            $table->timestamp('deleted_at');
            $table->timestamp('published_at');
        });
    }

    public function down() {
        Schema::drop('menus');
    }
}
