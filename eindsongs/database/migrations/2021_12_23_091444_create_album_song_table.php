<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('album_song', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->unsignedInteger('album_id')->value(11)->unsigned(false);
            $table->unsignedInteger('song_id')->value(11)->unsigned(false);

            $table->foreign('album_id')->references('id')->on('albums');
            $table->foreign('song_id')->references('id')->on('songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_song');
    }
}
