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
        Schema::table('biodatas', function (Blueprint $table) {
            $table->text('family_type')->nullable()->after('education_validate');
            $table->text('father_name')->nullable()->after('family_type');
            $table->text('father_current_condition')->nullable()->after('father_name');
            $table->text('father_profession')->nullable()->after('father_current_condition');
            $table->text('mother_name')->nullable()->after('father_profession');
            $table->text('mother_current_condition')->nullable()->after('mother_name');
            $table->text('mother_profession')->nullable()->after('mother_current_condition');
            $table->text('brother_count')->nullable()->after('mother_profession');
            $table->longText('brother_info')->nullable()->after('brother_count');
            $table->text('sister_count')->nullable()->after('brother_info');
            $table->longText('sister_info')->nullable()->after('sister_count');
            $table->longText('uncles_info')->nullable()->after('sister_info');
            $table->text('family_financial_info')->nullable()->after('uncles_info');
            $table->longText('social_status_info')->nullable()->after('family_financial_info');
            $table->text('family_members_info')->nullable()->after('social_status_info');
            $table->longText('family_religious_status')->nullable()->after('family_members_info');
            $table->text('familyinfo_validate')->nullable()->after('family_religious_status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
