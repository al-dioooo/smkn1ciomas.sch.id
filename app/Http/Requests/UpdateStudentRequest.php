<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'name' => 'required_if:_updating,profile|string|max:255',
            'nickname' => 'nullable|string|max:255',
            'nis' => 'required_if:_updating,profile|unique:students,nis,' . $this->student->id,
            'nisn' => 'required_if:_updating,profile|unique:students,nisn,' . $this->student->id,
            'major' => 'required_if:_updating,profile',
            'class' => 'required_if:_updating,profile|string',
            'gender' => 'required_if:_updating,profile|string',
            'place_of_birth' => 'required_if:_updating,profile|string|max:255',
            'date_of_birth' => 'required_if:_updating,profile|date',
            'religion' => 'required_if:_updating,profile|string',
            'nationality' => 'required_if:_updating,profile',
            'which_child' => 'required_if:_updating,profile',
            'siblings' => 'required_if:_updating,profile',
            'phone' => 'required_if:_updating,profile',
            'address' => 'required_if:_updating,address',
            'district' => 'required_if:_updating,address',
            'city' => 'required_if:_updating,address',
            'transport' => 'required_if:_updating,address',
            'status_of_residence' => 'required_if:_updating,address',
            'live_with' => 'required_if:_updating,address',
            'parent_name' => 'required_if:_updating,"parent information"|string|max:255',
            'parent_status' => 'required_if:_updating,"parent information"|string',
            'parent_place_of_birth' => 'required_if:_updating,"parent information"|string|max:255',
            'parent_date_of_birth' => 'required_if:_updating,"parent information"|date',
            'parent_education' => 'required_if:_updating,"parent information"|string|max:255',
            'parent_profession' => 'required_if:_updating,"parent information"|string|max:255',
            'parent_income' => 'required_if:_updating,"parent information"',
            'parent_liabilities' => 'required_if:_updating,"parent information"',
            'parent_phone' => 'required_if:_updating,"parent information"',
            'parent_address' => 'required_if:_updating,"parent information"',
            'school_before' => 'required_if:_updating,"registration information"',
            'school_certificate_link' => 'required_if:_updating,"registration information"',
            'school_certificate_number' => 'required_if:_updating,"registration information"',
            'birth_certificate_link' => 'required_if:_updating,"registration information"',
            'registration_path' => 'required_if:_updating,"registration information"'
        ];
    }
}
