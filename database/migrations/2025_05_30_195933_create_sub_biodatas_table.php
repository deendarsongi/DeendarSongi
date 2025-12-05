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
        Schema::create('sub_biodatas', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('salat_year', 10)->nullable();
            $table->string('mahram_non_mahram', 150)->nullable();
            $table->string('full_islamic_veil', 150)->nullable();
            $table->string('quran_recitation', 150)->nullable();
            $table->string('obligatory_beard', 150)->nullable();
            $table->string('ankle_dress', 150)->nullable();
            $table->string('outside_outside_clothes', 50)->nullable();
            $table->string('any_creed_sect', 150)->nullable();
            $table->string('favorite_islamic_book', 100)->nullable();
            $table->string('favorite_islamic_scholar', 100)->nullable();
            $table->string('physical_mental_condition', 100)->nullable();
            $table->string('eat_drink_intoxicating', 150)->nullable();
            $table->string('watch_listen_movies_songs', 150)->nullable();
            $table->string('involved_establish_religion', 100)->nullable();
            $table->string('beliefs_shrine', 100)->nullable();
            // Textareas
            $table->longText('about_yourself')->nullable();
            $table->longText('home_responsibilities')->nullable();

            $table->string('gender_equality', 50)->nullable();
            $table->string('religious_worldly_qualifi', 100)->nullable();
            $table->string('options_apply_you', 100)->nullable();
            $table->string('male_phone', 20)->nullable();
            $table->string('female_phone', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_biodatas');
    }
};
