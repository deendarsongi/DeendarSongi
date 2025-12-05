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
            $table->string('husband_name', 100)->nullable()->after('responsibility');
            $table->string('wife_name', 100)->nullable()->after('husband_name');
            $table->string('guardian_mobile', 100)->nullable()->after('wife_name');
            $table->string('guardian_relation', 100)->nullable()->after('guardian_mobile');
            $table->string('receive_biodata_email', 100)->nullable()->after('guardian_relation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
