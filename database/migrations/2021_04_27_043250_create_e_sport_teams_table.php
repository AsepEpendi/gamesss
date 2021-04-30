<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateESportTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_sport_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('esport_category_id');
            $table->string('name');
            $table->string('logo');
            $table->timestamps();

            $table->foreign('esport_category_id')->references('id')->on('e_sport_categories')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e_sport_teams');
    }
}
