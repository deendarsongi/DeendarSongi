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
            $table->string('expect_age', 50)->nullable()->after('compromise_husband');
            $table->string('expect_marital_type', 150)->nullable()->after('expect_age');
            $table->string('expect_district', 200)->nullable()->after('expect_marital_type');
            $table->string('expect_skin_colors', 100)->nullable()->after('expect_district');
            $table->string('expect_height', 100)->nullable()->after('expect_skin_colors');
            $table->string('expect_body_type', 100)->nullable()->after('expect_height');
            $table->string('expect_education', 200)->nullable()->after('expect_body_type');
            $table->string('expect_creed_sect', 100)->nullable()->after('expect_education');
            $table->string('expect_profession', 200)->nullable()->after('expect_creed_sect');
            $table->string('expect_economic_status', 100)->nullable()->after('expect_profession');
            $table->longText('expect_life_partner')->nullable()->after('expect_economic_status');
            $table->longText('expect_something_special')->nullable()->after('expect_life_partner');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
