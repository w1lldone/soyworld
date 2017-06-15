<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnfarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onfarms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '250');
            $table->string('description', '500')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('seed_id')->unsigned()->nullable();
            $table->integer('seed_quantity')->nullable();
            $table->integer('area')->nullable();
            $table->timestamp('planted_at')->nullable();
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
        Schema::dropIfExists('onfarms');
    }
}
