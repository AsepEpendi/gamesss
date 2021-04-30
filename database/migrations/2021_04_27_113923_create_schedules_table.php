<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('enemy_team_id');
            $table->unsignedBigInteger('team_esport_id');
            $table->string('cover');
            $table->dateTime('schedule_date');
            $table->text('description');
            $table->string('slug')->unique();
            $table->string('meta_desc');
            $table->integer('hits')->default(0);
            $table->timestamps();

            $table->foreign('enemy_team_id')->references('id')->on('e_sport_teams')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('team_esport_id')->references('id')->on('e_sport_teams')
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
        Schema::dropIfExists('schedules');
    }
}
