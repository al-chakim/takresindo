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
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('36')->nullable();
            $table->string('37')->nullable();
            $table->string('38')->nullable();
            $table->string('39')->nullable();
            $table->string('40')->nullable();
            $table->string('41')->nullable();
            $table->string('42')->nullable();
            $table->string('43')->nullable();
            $table->string('44')->nullable();
            $table->string('45')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sizes');
    }
};
