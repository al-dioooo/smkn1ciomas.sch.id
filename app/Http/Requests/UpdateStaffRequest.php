<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required_if:_updating,"profile information"|string|max:255',
            'email' => 'required_if:_updating,"profile information"|email|string|max:255|unique:users,email,' . $this->staff->auth_data->id,
            'password' => 'nullable|string|max:255',
            'nik' => 'required_if:_updating,"profile information"|unique:staff,nik,' . $this->staff->id,
            'gender' => 'required_if:_updating,"profile information"|string',
            'place_of_birth' => 'required_if:_updating,"profile information"|string|max:255',
            'date_of_birth' => 'required_if:_updating,"profile information"|date',
            'religion' => 'required_if:_updating,"profile information"|string',

            'phone' => 'required_if:_updating,"contact","kontak"|string|max:14',

            'province' => 'required_if:_updating,"address information"|string',
            'city' => 'required_if:_updating,"address information"|string',
            'district' => 'required_if:_updating,"address information"|string',
            'rural' => 'required_if:_updating,"address information"|string',
            'neighbourhood' => 'required_if:_updating,"address information"|numeric',
            'hamlet' => 'required_if:_updating,"address information"|numeric',
            'post_code' => 'required_if:_updating,"address information"|numeric|digits:5',
            'address' => 'required_if:_updating,"address information"|string',

            'npwp' => 'required_if:_updating,"additional information"',
            'tax_payer_name' => 'required_if:_updating,"additional information"|string',
            'nationality' => 'required_if:_updating,"additional information"|string|max:3',
            'bank_name' => 'required_if:_updating,"additional information"|string',
            'bank_account_number' => 'required_if:_updating,"additional information"|string',
            'bank_account_name' => 'required_if:_updating,"additional information"|string|max:255',

            'mother_name' => 'required_if:_updating,"family information"|string|max:255',
            'pair_name' => 'required_if:_updating,"family information"|string|max:255',
            'pair_nip' => 'required_if:_updating,"family information"|string|max:18',
            'pair_profession' => 'required_if:_updating,"family information"|string|max:255',
            'family_certificate_number' => 'required_if:_updating,"family information"|string|max:16',

            'nip' => 'required_if:_updating,"staffing information"|number|max:18',
            'nuptk' => 'required_if:_updating,"staffing information"|number|max:16',
            'employment_status' => 'required_if:_updating,"staffing information"|string|max:255',
            'ptk' => 'required_if:_updating,"staffing information"|string|max:255',
            'additional_duty' => 'required_if:_updating,"staffing information"|string|max:255',
            'cpns_sk' => 'required_if:_updating,"staffing information"|string|max:255',
            'cpns_date' => 'required_if:_updating,"staffing information"|date',
            'appointment_sk' => 'required_if:_updating,"staffing information"|string|max:255',
            'appointment_tmt' => 'required_if:_updating,"staffing information"|date',
            'rank' => 'required_if:_updating,"staffing information"|string|max:255',
            'source_salary' => 'required_if:_updating,"staffing information"|string|max:255',
            'pns_tmt' => 'required_if:_updating,"staffing information"|date',
            'karpeg' => 'required_if:_updating,"staffing information"|string|max:255',
            'karsu' => 'nullabe|mimes:png,jpg,webp',
            'nuks' => 'required_if:_updating,"staffing information"|number|max:22',
            'pair_pns_identity' => 'nullable|mimes:png,jpg,webp',

            'is_licensed_as_principal' => 'nullable|boolean',
            'had_supervision' => 'nullable|boolean',

            'is_mastering_braille' => 'nullable|boolean',
            'is_mastering_gestural_language' => 'nullable|boolean',
        ];
    }
}
