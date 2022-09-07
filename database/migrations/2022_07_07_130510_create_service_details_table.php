<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('project_title');
            $table->string('project_id')->nullable();
            $table->string('upload');
            $table->text('service_details');
            $table->enum('status',['pending','half_payment','full_payment'])->default('pending');
            $table->enum('project_status',['not yet started','in progress','complement'])->default('not yet started');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->decimal('price', 10, 2)->default(0.0);
            $table->decimal('amount_paid', 10, 2)->default(0.0);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('service_categories')->onDelete('cascade');
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
        Schema::dropIfExists('service_details');
    }
};
