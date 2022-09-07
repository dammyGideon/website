<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('full_name');
            $table->string('gender');
            $table->string('dob');
            $table->string('address');
            $table->string('year');
            $table->string('institution');
            $table->string('course');
            $table->string('CGPA');
            $table->string('statistics');
            $table->string('quantitative');
            $table->string('skills');
            $table->string('mathematics');
            $table->string('reasoning');
            $table->string('communication');
            $table->string('persuasiveness');
            $table->string('curiosity');
            $table->string('ms_excel');
            $table->string('powerpoint');
            $table->string('ms_word');
            $table->string('spss');
            $table->string('stata');
            $table->string('eviews');
            $table->string('r');
            $table->string('sql');
            $table->string('expectations');
            $table->string('contribute');

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
        Schema::dropIfExists('interviews');
    }
};
