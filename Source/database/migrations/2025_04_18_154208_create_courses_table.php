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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('description');
            $table->string('title');
            //i need a table speciying teachers i think
            //i need a table associating students with their classes
            // class that has teacher, description, students, name, 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
