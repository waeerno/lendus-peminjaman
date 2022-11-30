<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UnitRequest extends FormRequest
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
            'nama' =>  ['required', 'string', Rule::unique('units')->ignore($this->unit)],
            'pimpinan' => ['required', 'string', Rule::unique('units')->ignore($this->unit)],
            'nip' => ['required', 'numeric', Rule::unique('units')->ignore($this->unit)],
        ];
    }

    public function attributes()
    {
        return [
            'nama' => 'Nama Unit',
            'pimpinan' => 'Nama Pimpinan',
            'nip' => 'Nomor Induk Pegawai (NIP)'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => ':attribute harus diisi',
            '*.numeric' => ':attribute harus berupa angka',
            '*.string' => ':attribute harus berupa teks',
            '*.unique' => ':attribute sudah ada, silahkan masukkan data lain'
        ];
    }
}
