<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHarvestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harvests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('onfarm_id')->unsigned();
            $table->date('harvested_at')->nullable();
            $table->double('initial_stock', 4, 1)->nullable();
            $table->double('ending_stock', 4, 1)->nullable();
            $table->decimal('water_content', 4, 2)->nullable();
            $table->boolean('on_sale')->default(0);
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
        Schema::dropIfExists('harvests');
    }
}
