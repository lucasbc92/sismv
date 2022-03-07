<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccurrencesFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occurrences_facts', function (Blueprint $table) {
            $table->id();        
            $table->unsignedBigInteger('occurrence_id');
            $table->unsignedBigInteger('fact_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('occurrence_id')->references('occurrence_id')->on('occurrences')->onDelete('cascade');
            $table->foreign('fact_id')->references('fact_id')->on('facts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occurrences_facts');
    }
}
