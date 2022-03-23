<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required_without:phone', 'email', 'max:255', 'unique:users','nullable'],
            'phone' => ['required_without:email', 'unique:users','nullable'  ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }
}
