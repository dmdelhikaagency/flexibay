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
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('Combo: Breakfast + Lunch + Dinner');
            $table->dropColumn('With Breakfast');

            $table->decimal('combo_breakfast_lunch_dinner', 10, 2)->nullable();
            $table->decimal('with_breakfast', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
