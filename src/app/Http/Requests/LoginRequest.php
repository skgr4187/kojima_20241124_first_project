<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|string|unique|email|max191',
            'password' => 'required|min:8|max191',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => '文字列で入力してください',
            'email.email' => 'メール形式で入力してください',
            'email.max' => '191文字以内で入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.min' => '8文字以上で入力してください',
            'password.max' => '191文字以内で入力してください',
        ];
    }
}
