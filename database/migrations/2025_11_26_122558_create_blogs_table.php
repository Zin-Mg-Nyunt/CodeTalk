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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail')->nullable()->default('https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=200&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
