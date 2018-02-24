<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostharvestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postharvests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poktan_id')->unsigned();
            $table->string('name', 100)->nullable();
            $table->decimal('reduction_percentage', 4, 2)->nullable();
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
        Schema::dropIfExists('postharvests');
    }
}
