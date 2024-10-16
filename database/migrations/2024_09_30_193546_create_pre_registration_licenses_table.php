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
        Schema::create('pre_registration_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('company_name');
            $table->string('rfc');
            $table->string('business_type');
            $table->string('street_name');
            $table->string('street_number');
            $table->string('locality');
            $table->string('municipality');
            $table->string('cp'); // Postal code
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_registration_licenses');
    }
};
