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
        Schema::create('tutoriels', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->mediumText('description');
            $table->text('content');
            $table->string('video_youtube');
            $table->integer('video_duree');
            $table->timestamps();
            /** Ajouter formation_id en foreign key */
            $table->foreignId('formation_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            /** Ajouter user_id en foreign key */
            $table->foreignId('user_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutoriels');
    }
};
