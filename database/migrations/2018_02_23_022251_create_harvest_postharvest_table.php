<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHarvestPostharvestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harvest_postharvest', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('harvest_id')->unsigned();
            $table->integer('postharvest_id')->unsigned();
            $table->integer('cost')->nullable();
            $table->date('date')->nullable();
            $table->double('weight_reduction', 6,4)->nullable();
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
        Schema::dropIfExists('harvest_postharvests');
    }
}
