<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvolvedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('involved', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('participation');
            $table->unsignedBigInteger('fact');
            $table->unsignedBigInteger('identification_type');
            $table->string('name');
            $table->unsignedBigInteger('sex');
            $table->unsignedBigInteger('race');
            $table->unsignedBigInteger('age')->nullable();
            $table->unsignedBigInteger('nationality')->nullable();
            $table->unsignedBigInteger('country')->nullable();
            $table->unsignedBigInteger('state')->nullable();
            $table->unsignedBigInteger('city')->nullable();
            $table->unsignedBigInteger('profession')->nullable();
            $table->string('police_dsc')->nullable();
            $table->unsignedBigInteger('civil_status')->nullable();
            $table->unsignedBigInteger('education_level')->nullable();
            $table->unsignedBigInteger('sexual_orientation')->nullable();
            $table->unsignedBigInteger('gender')->nullable();
            $table->unsignedBigInteger('orcrim')->nullable();
            $table->unsignedBigInteger('police_passage')->nullable();
            //n-n police_passage_type only if police_passage=1;
            $table->unsignedBigInteger('apuration_type')->nullable();
            $table->unsignedBigInteger('apuration_institution')->nullable();
            $table->unsignedBigInteger('author_situation')->nullable();
            $table->date('arrest_date')->nullable();
            $table->unsignedBigInteger('feminicide_relationship_type')->nullable();
            $table->unsignedBigInteger('feminicide_has_children')->nullable();
            $table->unsignedBigInteger('feminicide_children_number')->nullable();
            $table->unsignedBigInteger('feminicide_relationship_years')->nullable();
            $table->enum('feminicide_bo',['Sim', 'Não', 'Não informado'])->nullable();
            $table->enum('feminicide_mpu', ['Sim', 'Não', 'Não informado'])->nullable();           
            $table->timestamps();
            $table->softDeletes();

             $table->foreign('participation')->references('participation_id')->on('participations');
             $table->foreign('fact')->references('fact_id')->on('facts');
             $table->foreign('identification_type')->references('identification_type_id')->on('identification_types');
             $table->foreign('sex')->references('sex_id')->on('sexes');
             $table->foreign('race')->references('race_id')->on('races');
             $table->foreign('nationality')->references('nationality_id')->on('nationalities');
             $table->foreign('country')->references('country_id')->on('countries');
             $table->foreign('state')->references('state_id')->on('states');
             $table->foreign('city')->references('city_id')->on('cities');
             $table->foreign('profession')->references('profession_id')->on('professions');
             $table->foreign('civil_status')->references('civil_status_id')->on('civil_statuses');
             $table->foreign('education_level')->references('education_level_id')->on('education_levels');
             $table->foreign('sexual_orientation')->references('sexual_orientation_id')->on('sexual_orientations');
             $table->foreign('gender')->references('gender_id')->on('genders');
             $table->foreign('orcrim')->references('orcrim_id')->on('orcrims');
             $table->foreign('police_passage')->references('police_passage_id')->on('police_passages');
             $table->foreign('apuration_type')->references('apuration_type_id')->on('apuration_types');
             $table->foreign('apuration_institution')->references('apuration_institution_id')->on('apuration_institutions');
             $table->foreign('author_situation')->references('author_situation_id')->on('author_situations');
             $table->foreign('feminicide_relationship_type')->references('feminicide_relationship_type_id')->on('feminicide_relationship_types');
             $table->foreign('feminicide_has_children')->references('feminicide_has_children_id')->on('feminicide_has_children');

             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('involved');
    }
}
