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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('biodata_id');
            $table->integer('customer_id');
            $table->enum('status', ['in_complete','approved', 'reject', 'in_review'])->default('in_complete');
            $table->string('biodata_type');
            $table->string('married_type');
            $table->string('date_of_birth');
            $table->string('face_color');
            $table->string('height');
            $table->string('weight');
            $table->string('body_shape');
            $table->string('blood_group');
            $table->string('generalinfo_validate')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
