<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('icon');
            $table->string('name');
            $table->string('title');
            $table->string('release_date');
            $table->string('url');
            $table->string('date');
            $table->string('image');
            $table->string('skill');
            $table->string('pt_name');
            $table->string('pt_image');
            $table->longText('pt_description');
            $table->longText('description');
            $table->integer('status')->comment('0 = Inactive, 1 = Active');
            
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('ct_details');
    }
}
