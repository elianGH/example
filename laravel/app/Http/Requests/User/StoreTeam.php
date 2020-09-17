<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeam extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nickname' => ['required', 'max:255', 'unique:team'],
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:team'],
            'phone' => ['required', 'max:15', 'unique:team'],
            'image' => ['file', 'mimes:jpeg,jpg,png,svg'],
            'password' => ['required', 'min:8'],
            'role' => ['required', 'integer']
        ];
    }
}
