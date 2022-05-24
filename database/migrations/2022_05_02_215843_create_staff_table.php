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
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('marrital_status')->nullable();

            $table->text('address')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('rural')->nullable();
            $table->string('neighbourhood')->nullable();
            $table->string('hamlet')->nullable();
            $table->string('post_code')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->string('phone')->nullable();

            $table->string('nip')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('ptk')->nullable();
            $table->string('additional_duty')->nullable();
            $table->string('cpns_sk')->nullable();
            $table->string('cpns_date')->nullable();
            $table->string('appointment_sk')->nullable();
            $table->string('appointment_tmt')->nullable();
            $table->string('appointment_institute')->nullable();
            $table->string('rank')->nullable();
            $table->string('source_of_salary')->nullable();
            $table->string('pns_tmt')->nullable();
            $table->string('karpeg')->nullable();
            $table->string('pair_pns_identity_link')->nullable();
            $table->string('nuks')->nullable();
            $table->string('is_licensed_as_principal')->nullable();
            $table->string('had_supervision_training')->nullable();

            $table->string('family_certificate_number')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('pair_name')->nullable();
            $table->string('pair_nip')->nullable();
            $table->string('pair_profession')->nullable();

            $table->string('npwp')->nullable();
            $table->string('tax_payer_name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_account_name')->nullable();

            $table->boolean('is_mastering_braille')->nullable();
            $table->boolean('is_mastering_gestural_language')->nullable();

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
