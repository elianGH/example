<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreClient extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => ['required', 'max:25', 'unique:backend-pgsql.client'],
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:backend-pgsql.client'],
            'phone' => ['required', 'max:15', 'unique:backend-pgsql.client'],
            'password' => ['required', 'min:8'],
            'client_role' => ['required']
        ];
    }
}
