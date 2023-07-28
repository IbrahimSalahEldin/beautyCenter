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
        Schema::create('claint_book', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('claint_id')->nullable();
            $table->unsignedBigInteger('book_id')->nullable();
            $table->timestamps();

            $table->foreign('claint_id')->references('id')->on('claints')->onDelete('set null');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claint_book');
    }
};
