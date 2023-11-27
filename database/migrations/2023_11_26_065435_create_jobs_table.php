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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('company')->nullable();
            $table->string('logo')->nullable();
            $table->enum('workplace_type', ['Remote', 'On-site', 'Hybrid'])->nullable();
            $table->string('location')->nullable();
            $table->enum('job_type', ['Full-time', 'Part-time', 'Contract', 'Temporary', 'Volunteer', 'Internship'])->nullable();
            $table->longText('description')->nullable();
            $table->longText('skills')->nullable();
            $table->integer('views')->nullable();
            $table->string('apply_link')->nullable();
            $table->string('salary')->nullable();
            $table->string('applicant_collection_email_address')->nullable();
            $table->boolean('rejection_emails')->default(false);
            $table->enum('status', ['Draft', 'Active', 'Closed'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
