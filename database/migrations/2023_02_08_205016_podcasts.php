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
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->mediumText('introduction');
            $table->string('nom_invite');
            $table->string('description_invite');
            $table->string('lieu_realisation');
            $table->string('realisateur');
            $table->string('image_icon');
            $table->integer('duree_video');
            $table->string('lien_video');
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
        Schema::dropIfExists('podcasts');
    }
};
