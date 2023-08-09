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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name')->min(3)->max(100);
            $table->unsignedMediumInteger('entryYear')->min(1998);
            $table->unsignedTinyInteger('rarity')->min(1)->max(5);
            $table->boolean('isActive')->default(true);
            $table->string('cardImg')->default('none.jpg')->nullable();
            $table->string('specialization')->max(16)->nullable();
            $table->unsignedMediumInteger('age')->min(14)->max(100)->nullable();
            $table->boolean('isSpecial')->default(false)->nullable();
            $table->text('biography')->max(256)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
