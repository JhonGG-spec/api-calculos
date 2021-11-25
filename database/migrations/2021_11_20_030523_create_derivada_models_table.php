<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDerivadaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derivada_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('value_a')->nullable();
            $table->integer('value_b')->nullable();
            $table->integer('value_c')->nullable();
            $table->integer('value_d')->nullable();
            $table->integer('value_e')->nullable();
            $table->string('results')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('derivada_models');
    }
}
