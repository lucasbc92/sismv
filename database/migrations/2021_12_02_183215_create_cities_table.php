<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id')->primary();
            $table->string('city_dsc');
            $table->unsignedBigInteger('state');
            $table->unsignedBigInteger('ibge_code');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('state')->references('state_id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
