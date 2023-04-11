<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateQuoteRequest extends FormRequest
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
            'image' =>  ['image'],
            'movie_id' => ['required', Rule::exists('movies', 'id')],
            'body.en' => [
                'regex:/^[a-zA-Z0-9\s\p{P}]*$/',
            ],
            'body.ka' => [
                'regex:/^[\p{Georgian}0-9\s\p{P}]*$/u',
            ]
        ];
    }
}
