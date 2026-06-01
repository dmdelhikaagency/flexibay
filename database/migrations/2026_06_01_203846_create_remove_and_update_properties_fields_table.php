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
            $table->dropColumn('meals_title_1');
            $table->dropColumn('meals_price_1');
            $table->dropColumn('meals_title_2');
            $table->dropColumn('meals_price_2');

            $table->decimal('Combo: Breakfast + Lunch + Dinner', 10, 2)->nullable();
            $table->decimal('With Breakfast', 10, 2)->nullable();
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
