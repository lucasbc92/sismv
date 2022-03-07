<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccurrencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occurrences', function (Blueprint $table) {
            $table->id();
            $table->string('bo_unity');
            $table->string('bo_year');
            $table->string('bo_number');
            $table->date('fact_date');
            $table->time('fact_hour');
            $table->string('local_address');
            $table->string('local_address_number')->nullable();
            $table->string('local_lat_long');
            $table->string('local_complement')->nullable();
            $table->unsignedBigInteger('local_city');
            $table->unsignedBigInteger('local_localization');
            $table->unsignedBigInteger('local_classification');
            $table->unsignedBigInteger('local_type')->nullable();
            $table->unsignedBigInteger('local_qualification')->nullable();
            $table->unsignedBigInteger('local_zone');
            $table->text('observations')->nullable();
            $table->string('process_unity')->nullable();
            $table->string('process_year')->nullable();
            $table->string('process_number')->nullable();
            $table->string('typification')->nullable();
            $table->date('process_assessment_date')->nullable();
            $table->date('process_referral_date')->nullable();
            $table->string('process_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('local_city')->references('city_id')->on('cities');
            $table->foreign('local_localization')->references('environment_localization_id')->on('environment_localizations');
            $table->foreign('local_classification')->references('environment_classification_id')->on('environment_classifications');
            $table->foreign('local_type')->references('environment_type_id')->on('environment_types');            
            $table->foreign('local_qualification')->references('environment_qualification_id')->on('environment_qualifications');
            $table->foreign('local_zone')->references('zone_id')->on('zones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occurrences');
    }
}
