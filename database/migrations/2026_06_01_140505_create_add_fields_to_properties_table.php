<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('image_option_1')->nullable();
            $table->string('image_option_2')->nullable();
            $table->string('image_option_3')->nullable();
            $table->string('image_option_4')->nullable();

            $table->dropColumn('has_meals');

            $table->string('meals_title_1')->nullable();
            $table->decimal('meals_price_1', 12, 2)->nullable();
            $table->string('meals_title_2')->nullable();
            $table->decimal('meals_price_2', 12, 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn([
                'image_option_1',
                'image_option_2',
                'image_option_3',
                'image_option_4',
                'meals_title_1',
                'meals_price_1',
                'meals_title_2',
                'meals_price_2',
            ]);

            $table->boolean('has_meals')->default(false);
        });
    }
};
