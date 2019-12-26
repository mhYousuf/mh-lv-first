<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('heading');
            $table->string('title');
            $table->string('skill');
            $table->string('skill_name');
            $table->longText('description');
            $table->string('lg_title');
            $table->string('lg_skill');
            $table->string('lg_skill_name');
            $table->longText('lg_description');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill');
    }
}
