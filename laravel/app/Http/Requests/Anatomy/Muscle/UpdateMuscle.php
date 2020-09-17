<?php

namespace App\Http\Requests\Anatomy\Muscle;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMuscle extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:255'],
            'body_part' => ['required', "in:neck,chest,abs,hands,legs"],
        ];
    }
}
