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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('programme');
            $table->string('level');
            $table->string('semester');
            $table->string('title');
            $table->enum('type',['video','text']);
            $table->string('content');
            $table->text('content_url');
            $table->text('content_data');
            $table->string('file_duration');
            $table->string('file_size');
            $table->string('acad_session');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
