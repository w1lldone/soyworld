<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnfarmCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onfarm_costs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250);
            $table->string('description', 500)->nullable();
            $table->integer('onfarm_id')->unsigned();
            $table->integer('supplier_id')->unsigned();
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
        Schema::dropIfExists('onfarm_costs');
    }
}
