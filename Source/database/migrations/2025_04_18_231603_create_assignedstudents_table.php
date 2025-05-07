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
        Schema::create('assignedstudents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('student_id')->references('id')->on('users');
            $table->foreignId('assignment_id')->references('id')->on('assignments');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignedstudents');
    }
};
