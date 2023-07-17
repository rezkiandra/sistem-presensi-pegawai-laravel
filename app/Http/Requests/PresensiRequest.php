<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PresensiRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'tanggal_presensi'  => 'required|date',
            'keterangan'        => 'required',
            'jam_masuk'         => 'required_if:keterangan,Hadir',
            'jam_keluar'        => 'required_if:jam_masuk,true',
        ];
    }

    public function messages()
    {
        return [
            'tanggal_presensi.required' => 'Tanggal presensi wajib diisi',
            'tanggal_presensi.date'     => 'Tanggal harus dalam format dd/mm/yyyy',
            'keterangan.required'       => 'Keterangan wajib diisi',
            'jam_masuk.required_if'     => 'Jam masuk wajib diisi',
        ];
    }
}
