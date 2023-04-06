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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('order');
            $table->string('categories');
            $table->string('thumbnail')->nullable();
            $table->string('duration')->nullable();
            $table->string('short_description')->nullable();
            $table->string('long_description')->nullable();
            $table->string('number_of_module')->nullable();
            $table->string('number_of_lesson')->nullable();
            $table->string('number_of_quiz')->nullable();   
            $table->string('number_of_attachment')->nullable();
            $table->string('number_of_video')->nullable();
            $table->string('status')->default('draft');
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
        Schema::dropIfExists('courses');
    }
};
