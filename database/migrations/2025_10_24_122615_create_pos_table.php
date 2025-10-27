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
        Schema::create('pos', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('po_number')->nullable();
            $table->string('information')->nullable();
            $table->string('product')->nullable();
            $table->string('artikel')->nullable();
            $table->string('picture')->nullable();
            $table->string('color')->nullable();
            $table->double('unit_prize', 10, 2)->nullable();
            $table->double('total_unit', 10, 2)->nullable();
            $table->double('value', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos');
    }
};
