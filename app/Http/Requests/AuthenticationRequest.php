<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AuthenticationRequest extends FormRequest
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
            'login' => 'required|min:4|max:20',
            'password' => 'required|min:8|max:20',
        ];
    }
}
