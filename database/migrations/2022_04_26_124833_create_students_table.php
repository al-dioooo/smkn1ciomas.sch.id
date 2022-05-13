<?php

use App\Models\User;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('nis', 10)->unique();
            $table->string('nisn', 10)->unique()->nullable();
            $table->string('major');
            $table->string('class');
            $table->string('gender')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('which_child')->nullable();
            $table->integer('siblings')->nullable();
            $table->string('phone')->nullable();

            $table->text('address')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('transport')->nullable();
            $table->string('status_of_residence')->nullable();
            $table->string('live_with')->nullable();

            $table->string('parent_name')->nullable();
            $table->string('parent_status')->nullable();
            $table->string('parent_place_of_birth')->nullable();
            $table->date('parent_date_of_birth')->nullable();
            $table->string('parent_education')->nullable();
            $table->string('parent_profession')->nullable();
            $table->string('parent_income')->nullable();
            $table->integer('parent_liabilities')->nullable();
            $table->text('parent_address')->nullable();
            $table->string('parent_phone')->nullable();

            $table->string('school_before')->nullable();
            $table->text('school_certificate_link')->nullable();
            $table->string('school_certificate_number')->nullable();
            $table->text('birth_certificate_link')->nullable();
            $table->text('family_certificate_link')->nullable();
            $table->string('registration_path')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

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
        Schema::dropIfExists('students');
    }
};
