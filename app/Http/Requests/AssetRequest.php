<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AssetRequest extends FormRequest
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
            'nama' => 'required',
            'unit_id' => 'required',
            'jumlah' => 'required',
            'jenis' => 'required',
            'kategori_id' => 'required',
            // 'foto' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'nama' => 'Nama Asset',
            'unit_id' => 'Unit Pemilik Asset',
            'jumlah' => 'Jumlah Asset',
            'jenis' => 'Jenis Asset',
            'kategori_id' => 'Kelompok Kategori Asset',
            'foto' => 'Foto Asset',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => ':attribute harus diisi',
        ];
    }
}
