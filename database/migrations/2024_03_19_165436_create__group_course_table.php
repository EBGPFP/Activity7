<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('group_course', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id');
            $table->string('course_key');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('course_key')->references('course_key')->on('courses');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_course');
    }
};
