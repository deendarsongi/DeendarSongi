<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('biodatas', function (Blueprint $table) {
            $table->string('permanent_upazila')->nullable()->after('generalinfo_validate');
            $table->string('permanent_district')->nullable()->after('permanent_upazila');
            $table->string('permanent_division')->nullable()->after('permanent_district');
            $table->string('permanent_country')->nullable()->after('permanent_division');
            $table->string('permanent_ads_extra')->nullable()->after('permanent_country');

            $table->string('current_upazila')->nullable()->after('permanent_ads_extra');
            $table->string('current_district')->nullable()->after('current_upazila');
            $table->string('current_division')->nullable()->after('current_district');
            $table->string('current_country')->nullable()->after('current_division');
            $table->string('current_ads_extra')->nullable()->after('current_country');
            $table->string('born_raised')->nullable()->after('current_ads_extra');
            $table->integer('same_address')->nullable()->after('born_raised');
            $table->string('address_validate')->nullable()->after('same_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
