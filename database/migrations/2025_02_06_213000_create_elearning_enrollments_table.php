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
        Schema::create('elearning_enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('current_grade')->nullable();
            $table->string('nationality')->nullable();
            $table->string('parent_name')->nullable();
            $table->enum('relationship', ['father', 'mother', 'guardian'])->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->enum('medical_conditions', ['yes', 'no'])->nullable();
            $table->string('medical_details')->nullable();
            $table->enum('medications', ['yes', 'no'])->nullable();
            $table->string('medication_details')->nullable();
            $table->date('start_date')->nullable();
            $table->enum('special_needs', ['yes', 'no'])->nullable();
            $table->string('special_needs_details')->nullable();
            $table->enum('online_recording_consent', ['yes', 'no'])->nullable();
            $table->enum('photo_video_consent', ['yes', 'no'])->nullable();
            $table->enum('payment_plan', ['weekly', 'monthly', 'quarterly', 'annually'])->nullable();
            $table->string('signature_name')->nullable();
            $table->date('signature_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elearning_enrollments');
    }
};
