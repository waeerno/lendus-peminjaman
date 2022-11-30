<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class KategoriRequest extends FormRequest
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
            'nama' =>  ['required', 'string', Rule::unique('kategoris')->ignore($this->unit)],
        ];
    }

    public function attributes()
    {
        return [
            'nama' => 'Nama Kategori',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => ':attribute harus diisi',
            '*.string' => ':attribute harus berupa teks',
            '*.unique' => ':attribute sudah ada, silahkan masukkan data lain'
        ];
    }
}
