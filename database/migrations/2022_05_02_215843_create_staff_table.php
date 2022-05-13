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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();

            $table->string('nik')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('gender')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('nip')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('ptk')->nullable();
            $table->string('religion')->nullable();

            $table->text('address')->nullable();
            $table->string('neighbourhood')->nullable();
            $table->string('hamlet')->nullable();
            $table->string('village')->nullable();
            $table->string('urban_village')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('post_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('additional_duty')->nullable();
            $table->string('cpns_sk')->nullable();
            $table->string('cpns_date')->nullable();
            $table->string('appointment_sk')->nullable();
            $table->string('appointment_tmt')->nullable();
            $table->string('appointment_institute')->nullable();
            $table->string('rank')->nullable();
            $table->string('source_of_salary')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('marrital_status')->nullable();
            $table->string('pair_name')->nullable();
            $table->string('pair_nip')->nullable();
            $table->string('pair_profession')->nullable();
            $table->string('is_licensed_as_principal')->nullable();
            $table->string('had_supervision_training')->nullable();
            $table->string('is_mastering_braille')->nullable();
            $table->string('is_mastering_gestural_language')->nullable();
            $table->string('tax_payer_name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->string('family_certificate_number')->nullable();
            $table->string('karpeg')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('nuks')->nullable();

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
        Schema::dropIfExists('staff');
    }
};
