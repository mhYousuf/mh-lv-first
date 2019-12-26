<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon');
            $table->string('ex_name');
            $table->string('ex_title');
            $table->string('ex_date');
            $table->longText('ex_description');
            $table->string('ed_icon');
            $table->string('ed_name');
            $table->string('ed_title');
            $table->string('ed_date');
            $table->longText('ed_description');
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
        Schema::dropIfExists('resume');
    }
}
