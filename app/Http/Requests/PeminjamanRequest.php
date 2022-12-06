<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeminjamanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pengguna' => 'required',
            'asset' => 'required',
            'pakai' => 'required',
            'durasi' => 'required',
            'surat' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'pengguna' => 'Nama Pengguna',
            'asset' => 'Sumber Asset',
            'pakai' => 'Tanggal Penggunaan',
            'durasi' => 'Durasi',
            'surat' => 'Lampiran Surat'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong',
        ];
    }
}
