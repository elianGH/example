<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTeam extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nickname' => [
                'required',
                Rule::unique('team')->ignore($this->team),
            ],
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => [
                'required',
                'email',
                Rule::unique('team')->ignore($this->team),
            ],
            'phone' => [
                'required',
                'max:15',
                Rule::unique('team')->ignore($this->team),
            ],
            'image' => ['file', 'mimes:jpeg,jpg,png,svg'],
            'role' => ['required', 'integer']
        ];
    }
}
