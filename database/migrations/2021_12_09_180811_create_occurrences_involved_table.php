<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccurrencesInvolvedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occurrences_involved', function (Blueprint $table) {
        $table->id();        
        $table->unsignedBigInteger('occurrence_id');
        $table->unsignedBigInteger('involved_id');

        $table->foreign('occurrence_id')->references('occurrence_id')->on('occurrences')->onDelete('cascade');
        $table->foreign('involved_id')->references('involved_id')->on('involved')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occurrences_involved');
    }
}
