<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClient extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => [
                'required',
                'max:25',
                Rule::unique('backend-pgsql.client')->ignore($this->client),
            ],
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => [
                'required',
                'email',
                Rule::unique('backend-pgsql.client')->ignore($this->client),
            ],
            'phone' => [
                'required',
                'max:15',
                Rule::unique('backend-pgsql.client')->ignore($this->client),
            ],
            'client_role' => ['required']
        ];
    }
}
