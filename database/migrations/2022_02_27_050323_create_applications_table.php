<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portal_id')->references('id')->on('portals')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('student_type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('age')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('tribe')->nullable();
            $table->string('religion')->nullable();
            $table->string('school_last_attended')->nullable();
            $table->string('school_address')->nullable();
            $table->string('track_taken')->nullable();
            $table->string('school_year_graduated')->nullable();
            $table->text('awards_received')->nullable();
            $table->string('student_photo')->nullable();
            $table->string('first_sem_gpa_photo')->nullable();
            $table->string('shs_cor_photo')->nullable();
            $table->string('scan_shs_id')->nullable();
            $table->string('first_choice')->nullable();
            $table->string('second_choice')->nullable();
            $table->string('transferee_choice')->nullable();
            $table->string('transferee_last_school_attended')->nullable();
            $table->string('previous_program')->nullable();
            $table->string('school_year_last_attended')->nullable();
            $table->string('sex')->nullable();
             $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};