<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolvedPolicePassageTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involved_police_passage_types', function (Blueprint $table) {
            $table->id();        
            $table->unsignedBigInteger('involved_id');
            $table->unsignedBigInteger('police_passage_type_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('involved_id')->references('involved_id')->on('involved')->onDelete('cascade');
            $table->foreign('police_passage_type_id')->references('police_passage_type_id')->on('police_passage_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('involved_police_passage_types');
    }
}
