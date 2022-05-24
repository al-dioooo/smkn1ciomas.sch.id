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

            'is_mastering_braille' => 'required_if:_updating,"other information"|boolean',
            'is_mastering_gestural_language' => 'required_if:_updating,"other information"|boolean',
        ];
    }
}
