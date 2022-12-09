<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_catalogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_id')->references('id')->on('catalogs')->onDelete('cascade');
            $table->text('track_file');
            $table->string('title',30);
            $table->string('composer',20);
            $table->string('artist_name',30);

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
        Schema::dropIfExists('track_catalogs');
    }
};
