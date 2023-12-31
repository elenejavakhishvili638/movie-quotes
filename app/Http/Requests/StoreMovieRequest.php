<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [

            'title.en' => [
                'required',
                'unique:movies,title->en',
                'regex:/^[a-zA-Z0-9\s\p{P}]*$/',
            ],
            'title.ka' => [
                'required',
                'unique:movies,title->ka',
                'regex:/^[\p{Georgian}0-9\s\p{P}]*$/u',
            ]
        ];
    }
}
