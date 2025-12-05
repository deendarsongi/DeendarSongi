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
        Schema::table('sub_biodatas', function (Blueprint $table) {
            $table->string('profession', 20)->nullable()->after('female_phone');
            $table->longText('profession_details')->nullable()->after('profession');
            $table->string('workplace', 100)->nullable()->after('profession_details');
            $table->string('income_verify', 50)->nullable()->after('workplace');
            $table->string('monthly_income', 50)->nullable()->after('income_verify');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
