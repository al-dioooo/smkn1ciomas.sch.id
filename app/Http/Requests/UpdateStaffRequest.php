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
            'name' => 'required_if:_updating,profile|string|max:255',
            'email' => 'required_if:_updating,profile|email|string|max:255|unique:users,email,' . $this->staff->auth_data->id,
            'password' => 'nullable|string|max:255',
            'nik' => 'required_if:_updating,profile|unique:staff,nik,' . $this->staff->id,
            'gender' => 'required_if:_updating,profile|string',
            'place_of_birth' => 'required_if:_updating,profile|string|max:255',
            'date_of_birth' => 'required_if:_updating,profile|date',
            'religion' => 'required_if:_updating,profile|string',
            'phone' => 'required_if:_updating,contact|string|max:14',
        ];
    }
}
