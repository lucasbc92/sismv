<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environment_classifications', function (Blueprint $table) {
            $table->unsignedBigInteger('environment_classification_id')->primary();
            $table->string('environment_classification_dsc');
            $table->unsignedBigInteger('environment_localization');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('environment_localization')->references('environment_localization_id')->on('environment_localizations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('environment_classifications');
    }
}
