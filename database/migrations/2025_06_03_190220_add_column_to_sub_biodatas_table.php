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
            $table->string('parents_consent', 100)->nullable()->after('monthly_income');
            $table->string('currently_wife_children', 100)->nullable()->after('parents_consent');

            $table->longText('married_again')->nullable()->after('currently_wife_children');
            $table->longText('divorce_reason')->nullable()->after('married_again');
            $table->longText('husband_death_year')->nullable()->after('divorce_reason');
            $table->longText('wife_new_relationship')->nullable()->after('husband_death_year');
            $table->longText('wife_death_year')->nullable()->after('wife_new_relationship');
            $table->longText('husband_new_relationship')->nullable()->after('wife_death_year');

            $table->longText('why_getting_married')->nullable()->after('husband_new_relationship');
            $table->string('obedience_husband', 100)->nullable()->after('why_getting_married');
            $table->string('job_after_marriage', 100)->nullable()->after('obedience_husband');
            $table->longText('husband_responsibilities')->nullable()->after('job_after_marriage');

            $table->string('after_marriage_veil', 100)->nullable()->after('husband_responsibilities');
            $table->string('wife_after_marriage_job', 100)->nullable()->after('after_marriage_veil');
            $table->string('wife_after_marriage_live', 100)->nullable()->after('wife_after_marriage_job');
            $table->longText('wife_responsibilities')->nullable()->after('wife_after_marriage_live');

            $table->string('expect_wedding_gift', 100)->nullable()->after('wife_responsibilities');
            $table->string('about_mohar', 100)->nullable()->after('expect_wedding_gift');
            $table->string('student_unemployed', 100)->nullable()->after('about_mohar');
            $table->string('second_wife', 100)->nullable()->after('student_unemployed');
            $table->string('widow_divorced_woman', 100)->nullable()->after('second_wife');
            $table->string('compromise_wife', 100)->nullable()->after('widow_divorced_woman');
            $table->string('compromise_husband', 100)->nullable()->after('compromise_wife');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
