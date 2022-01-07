<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments("id")->unsigned(false);
            $table->string("Name")->nullable(false);
            $table->integer("year")->length(4);
            $table->integer("times_sold")->nullable(true);
            $table->timestamps();
            $table->unsignedInteger('band_id')->value(11)->unsigned(false);
            $table->foreign('band_id')->references('id')->on('bands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
