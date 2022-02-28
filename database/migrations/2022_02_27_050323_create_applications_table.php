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
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('age');
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->string('nationality');
            $table->string('citizenship');
            $table->string('civil_status');
            $table->string('tribe');
            $table->string('religion');
            $table->string('school_last_attended');
            $table->string('school_address');
            $table->string('track_taken');
            $table->string('school_year_graduated');
            $table->text('awards_received');
            $table->string('student_photo');
            $table->string('first_sem_gpa_photo');
            $table->string('shs_cor_photo');
            $table->string('first_choice');
            $table->string('second_choice');
            $table->string('sex');
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