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
        Schema::create('programs', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->string('short_title');
            $table->unsignedBigInteger('program_level_id');
            $table->unsignedBigInteger('program_duration_id');
            $table->foreign('program_level_id')->references('id')->on('program_levels');
            $table->foreign('program_duration_id')->references('id')->on('program_duration_types');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
