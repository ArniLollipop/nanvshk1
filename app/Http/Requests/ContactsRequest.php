<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Заполните поле Имя',
            'phone.required' => 'Заполните поле Телефон',
            'email.required' => 'Заполните поле Email',
            'email.unique' => 'У вас уже есть аккаунт с этим адресом электронной почты. <a href="/login"> Войдите </a>, чтобы продолжить.',
        ];
    }
}
