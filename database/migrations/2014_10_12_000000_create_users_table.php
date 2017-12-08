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
            $table->string('photo', 250)->nullable();
            $table->string('email')->unique();
            $table->string('address', 250)->nullable();
            $table->string('contact', 15)->nullable();
            $table->string('password');
            $table->integer('privilage_id')->unsigned();
            $table->integer('poktan_id')->unsigned();
            $table->boolean('is_activated')->default(0);
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
