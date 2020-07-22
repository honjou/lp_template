<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LpTemplateRequest extends FormRequest
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
     * バリデーションルールを記述
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
        ];
    }

    /**
     * エラーメッセージ
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => '必須項目です',
            'email' => 'メールアドレスの形式で入力してください',
        ];
    }

}
