<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{

    public function up()
    {
        Schema::create('data_analytics_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('details');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('data_analytics_infos');
    }
};
