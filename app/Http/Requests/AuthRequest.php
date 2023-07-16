<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'      => 'required|min:4|max:255',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:8|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Nama wajib diisi',
            'name.min'          => 'Nama minimal 4 karakter',
            'email.required'    => 'Email wajib diisi',
            'email.email'       => 'Email wajib menggunakan @',
            'email.unique'      => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min'      => 'Password minimal 8 karakter',
        ];
    }
}
