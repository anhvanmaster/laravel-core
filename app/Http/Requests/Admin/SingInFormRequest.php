<?php

namespace App\Http\Requests\Adminơ]ơ;

use Illuminate\Foundation\Http\FormRequest;

class SingInFormRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:5',
        ];
    }

    /**
     * Custom attributes validate.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'loginId' => __('Email'),
            'password' => __('Passowrd'),
        ];
    }
}
