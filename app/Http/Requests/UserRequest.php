<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|max:255|min:8',
            'wallet' => ['required', 'string', 'max:255'],
            'total_balance' => 'max:10|required|string',
            'available_balance' => 'max:10|required|string'
        ];
    }
}
