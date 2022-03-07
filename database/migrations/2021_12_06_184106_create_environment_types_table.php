<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environment_types', function (Blueprint $table) {
            $table->unsignedBigInteger('environment_type_id')->primary();
            $table->string('environment_type_dsc');
            $table->unsignedBigInteger('environment_classification');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('environment_classification')->references('environment_classification_id')->on('environment_classifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('environment_types');
    }
}
