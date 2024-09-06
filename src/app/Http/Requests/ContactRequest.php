<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function messages()
    {
        return[
            'name.required' => '姓名を入力してください',
            'choosegender' => '性別を選択してください',
            'email' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel' => '電話番号を入力してください',
            'tel.max' => '`電話番号は11桁までの数字で入力してください',
            'address' => '住所を入力してください',
            'choosekinds' => 'お問い合わせの種類を選択してください',
            'content' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問合せ内容は120文字以内で入力してください'

        ];
    }
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:10,11'],
            'address' => ['required', 'string', 'max:255'],
            'duilding' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:120'],

            
        ];
    }
}
