<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama_depan'        => 'required|max:50',
            'nama_belakang'     => 'max:50|nullable',
            'nip'               => 'required|numeric|unique:pegawais',
            'pangkat'           => 'required',
            'golongan'          => 'required',
            'jenkel'            => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_depan.required'       => 'Nama depan wajib diisi',
            'nama_depan.max'            => 'Nama depan maksimal 50 karakter',
            'nama_belakang.max'         => 'Nama belakang maksimal 50 karakter',
            'nama_belakang.nullable'    => 'Boleh tidak mengisi nama belakang jika tidak ada',
            'nip.required'              => 'NIP wajib diisi',
            'nip.numeric'               => 'NIP harus dalam bentuk angka',
            'nip.unique'                => 'NIP tidak boleh sama dengan pegawai lain',
            'pangkat.required'          => 'Pangkat wajib diisi',
            'golongan.required'         => 'Golongan wajib diisi',
            'jenkel.required'           => 'Jenis kelamin wajib diisi',
        ];
    }
}
