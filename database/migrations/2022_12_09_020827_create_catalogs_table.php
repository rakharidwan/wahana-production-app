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
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('uploader_by')->references('id')->on('users')->onDelete('cascade');
            $table->text('cover_artwork');
            $table->string('title',35);
            $table->string('gendre',20);
            $table->string('sub_gendre',20)->nullable();
            $table->string('record_label',35);
            $table->string('produced_by',35)->nullable();
            $table->decimal('production_year', $precision = 4, $scale = 0);
            $table->date('first_realease_date');
            $table->date('realease_date');
            $table->string('lyric_language','25')->default('None/Instrumental');
            $table->text('lyric_url')->nullable();
            $table->text('description')->nullable();

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
        Schema::dropIfExists('catalogs');
    }
};
