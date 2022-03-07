<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccurrencesMotivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occurrences_motivations', function (Blueprint $table) {
            $table->id();        
            $table->unsignedBigInteger('occurrence_id');
            $table->unsignedBigInteger('motivation_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('occurrence_id')->references('occurrence_id')->on('occurrences')->onDelete('cascade');
            $table->foreign('motivation_id')->references('motivation_id')->on('motivations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occurrences_motivations');
    }
}
