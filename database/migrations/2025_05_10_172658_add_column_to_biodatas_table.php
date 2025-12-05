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
            $table->string('education_type')->nullable()->after('address_validate');
            $table->string('highest_education')->nullable()->after('education_type');
            $table->string('under_ssc_class')->nullable()->after('highest_education');
            $table->string('ssc_passing_year')->nullable()->after('under_ssc_class');
            $table->string('ssc_education_category')->nullable()->after('ssc_passing_year');
            $table->string('ssc_result')->nullable()->after('ssc_education_category');

            $table->string('hsc_ongoing_year')->nullable()->after('ssc_result');
            $table->string('hsc_passing_year')->nullable()->after('hsc_ongoing_year');
            $table->string('hsc_education_category')->nullable()->after('hsc_passing_year');
            $table->string('hsc_result')->nullable()->after('hsc_education_category');

            $table->string('diploma_ongoing_subject')->nullable()->after('hsc_result');
            $table->string('diploma_ongoing_year')->nullable()->after('diploma_ongoing_subject');
            $table->string('diploma_ongoing_institut')->nullable()->after('diploma_ongoing_year');
            $table->string('diploma_passing_subject')->nullable()->after('diploma_ongoing_institut');
            $table->string('diploma_passing_year')->nullable()->after('diploma_passing_subject');
            $table->string('diploma_passing_institut')->nullable()->after('diploma_passing_year');
            $table->string('after_ssc_education')->nullable()->after('diploma_passing_institut');

            $table->string('honours_ongoing_subject')->nullable()->after('after_ssc_education');
            $table->string('honours_ongoing_year')->nullable()->after('honours_ongoing_subject');
            $table->string('honours_ongoing_institut')->nullable()->after('honours_ongoing_year');
            $table->string('honours_passing_subject')->nullable()->after('honours_ongoing_institut');
            $table->string('honours_passing_year')->nullable()->after('honours_passing_subject');
            $table->string('honours_passing_institut')->nullable()->after('honours_passing_year');

            $table->string('masters_passing_subject')->nullable()->after('honours_passing_institut');
            $table->string('masters_passing_year')->nullable()->after('masters_passing_subject');
            $table->string('masters_passing_institut')->nullable()->after('masters_passing_year');

            $table->string('ibtidaiyah_passing_year')->nullable()->after('masters_passing_institut');
            $table->string('ibtidaiyah_result')->nullable()->after('ibtidaiyah_passing_year');
            $table->string('ibtidaiyah_madrasa_name')->nullable()->after('ibtidaiyah_result');

            $table->string('other_educational')->nullable()->after('ibtidaiyah_madrasa_name');

            $table->string('mutawasita_passing_year')->nullable()->after('other_educational');
            $table->string('mutawasita_result')->nullable()->after('mutawasita_passing_year');
            $table->string('mutawasita_madrasa_name')->nullable()->after('mutawasita_result');

            $table->string('sanabia_passing_year')->nullable()->after('mutawasita_madrasa_name');
            $table->string('sanabia_result')->nullable()->after('sanabia_passing_year');
            $table->string('sanabia_madrasa_name')->nullable()->after('sanabia_result');

            $table->string('fazilat_passing_year')->nullable()->after('sanabia_madrasa_name');
            $table->string('fazilat_result')->nullable()->after('fazilat_passing_year');
            $table->string('fazilat_madrasa_name')->nullable()->after('fazilat_result');

            $table->string('taqmeel_passing_year')->nullable()->after('fazilat_madrasa_name');
            $table->string('taqmeel_result')->nullable()->after('taqmeel_passing_year');
            $table->string('taqmeel_madrasa_name')->nullable()->after('taqmeel_result');

            $table->string('takhassus_passing_subject')->nullable()->after('taqmeel_madrasa_name');
            $table->string('takhassus_passing_year')->nullable()->after('takhassus_passing_subject');
            $table->string('takhassus_result')->nullable()->after('takhassus_passing_year');
            $table->string('takhassus_madrasa_name')->nullable()->after('takhassus_result');
            $table->string('religious_qualifi')->nullable()->after('takhassus_madrasa_name');
            $table->string('education_validate')->nullable()->after('religious_qualifi');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
