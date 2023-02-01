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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->mediumText('description');
            $table->mediumText('presentation');
            $table->string('image_icon');
            $table->string('video_link_presentation');
            $table->smallInteger('total_chapitres');
            $table->smallInteger('total_duree');
            $table->timestamps();            
            /* $table->foreignId('tutoriel_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
};
