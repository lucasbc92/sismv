<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeminicideRelationshipTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feminicide_relationship_types', function (Blueprint $table) {
            $table->unsignedBigInteger('feminicide_relationship_type_id')->primary();
            $table->string('feminicide_relationship_type_dsc');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feminicide_relationship_types');
    }
}
