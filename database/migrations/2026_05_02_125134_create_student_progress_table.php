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
        Schema::create('student_progress', function (Blueprint $table) {

            $table->id();

            $table->foreignId('student_id')
                ->constrained('student_admissions')
                ->cascadeOnDelete();

            $table->foreignId('course_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('module_id')
                ->nullable()
                ->constrained('course_modules')
                ->cascadeOnDelete();

            $table->unsignedBigInteger('material_id')->nullable();

            $table->foreign('material_id')
                ->references('id')
                ->on('course_materials')
                ->onDelete('cascade');

            $table->boolean('is_completed')->default(false);
            $table->timestamp('completed_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_progress');
    }
};
