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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('resume');
            $table->longText('description')->nullable();
            $table->string('couverture')->nullable();
            $table->json('images')->nullable();
            $table->integer('is_active')->default(0);
            $table->integer('is_recent')->default(0);
            $table->integer('is_free')->default(0);
            $table->string('pdf')->nullable();

            $table->foreignId('domaine_id')->constrained('domaines')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
