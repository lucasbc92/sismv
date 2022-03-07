<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccurrencesMeansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occurrences_means', function (Blueprint $table) {
            $table->id();        
            $table->unsignedBigInteger('occurrence_id');
            $table->unsignedBigInteger('mean_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('occurrence_id')->references('occurrence_id')->on('occurrences')->onDelete('cascade');
            $table->foreign('mean_id')->references('mean_id')->on('means')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occurrences_means');
    }
}
