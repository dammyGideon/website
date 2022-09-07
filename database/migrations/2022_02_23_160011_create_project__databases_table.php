<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{

    public function up()
    {
        Schema::create('project_databases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('project_id');
            $table->string('project_type');
            $table->string('project_title');
            $table->string('word_count')->nullable();
            $table->string('date_started')->nullable();
            $table->string('deadline')->nullable();
            $table->string('actual_deadline')->nullable();
            $table->string('resource')->nullable();
            $table->string('status')->nullable();
            $table->string('handler')->nullable();
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
        Schema::dropIfExists('project__databases');
    }
};
