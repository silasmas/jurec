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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prennom');
            $table->string('sexe')->nullable();
            $table->string(column: 'poste');
            $table->string(column: 'profil');
            $table->integer('is_active')->default(0);
            $table->longText(column: 'biographie')->nullable();
            $table->string(column: 'fb')->nullable();
            $table->string(column: 'youtube')->nullable();
            $table->string(column: 'x')->nullable();
            $table->string(column: 'instagram')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
