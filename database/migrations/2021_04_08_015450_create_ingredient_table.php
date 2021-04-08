<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_tbl', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('recipe_id');
            $table->float('amount');
            $table->bigInteger('measurement_id');
            $table->timestamps();
        });
        Schema::table('ingredient_tbl', function (Blueprint $table) {
            $table->foreign('recipe_id')->references('id')->on('recipe_tbl');
            $table->foreign('measurement_id')->references('id')->on('measurement_tbl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipe_tbl', function (Blueprint $table) {
            $table->dropForeign(['measurement_id', 'recipe_id']);
        });
        Schema::dropIfExists('ingredient');
    }
}
