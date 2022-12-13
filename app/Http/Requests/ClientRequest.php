<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientRequest extends FormRequest
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
            'no_induk' => ['required', 'numeric', Rule::unique('clients')->ignore($this->client)],
            'nama' => 'required',
            'no_wa' => ['required', 'numeric', Rule::unique('clients')->ignore($this->client)],
            'email' => ['required', 'string', Rule::unique('clients')->ignore($this->client)],
            'unit_id' => 'required',
            'jenis' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'no_induk' => 'Nomor Induk',
            'no_wa' => 'Nomor Whatsapp',
            'unit_id' => 'Nama Unit',
        ];
    }

    public function messages()
    {
        return [
            'unit_id.required' => ':attribute harus dipilih',
            '*.required' => ':attribute harus diisi',
            '*.number' => ':attribute harus berupa angka',
            '*.unique' => ':attribute sudah tersedia',
        ];
    }
}
