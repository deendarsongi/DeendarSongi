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
            $table->string('guardian_permission', 50)->nullable()->after('expect_something_special');
            $table->string('information_true', 50)->nullable()->after('guardian_permission');
            $table->string('responsibility', 50)->nullable()->after('information_true');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
