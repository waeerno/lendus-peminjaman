<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MatchOldPassword;

class ProfileRequest extends FormRequest
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
            'curr_password' => ['required', 'string', new MatchOldPassword],
            'new_password' => 'required|string|confirmed|min:8',
            'new_password_confirmation' => 'required|string'
        ];
    }

    public function attributes()
    {
        return [
            'curr_password' => 'Password lama',
            'new_password' => 'Password baru',
            'new_password_confirmation' => 'Konfirmasi Password',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => ':attribute harus diisi',
            '*.string' => ':attribute harus berupa string',
            '*.min' => ':attribute minimal :min karakter',
            '*.confirmed' => 'konfirmasi password tidak sesuai',
        ];
    }
}
