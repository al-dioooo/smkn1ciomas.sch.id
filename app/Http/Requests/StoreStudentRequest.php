<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255|unique:users,email',
            'password' => 'required|string|max:255',
            'nickname' => 'nullable|string|max:255',
            'nis' => 'required|unique:students,nis',
            'nisn' => 'required|unique:students,nisn',
            'major' => 'required',
            'class' => 'required|string'
        ];
    }
}
