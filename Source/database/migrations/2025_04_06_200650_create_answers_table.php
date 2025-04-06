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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('question_id')->constrained()->onDelete('cascade')->nullable(false);
            $table->string('answer')->nullable(false);
            $table->boolean('correct')->nullable(false)->default(false);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
