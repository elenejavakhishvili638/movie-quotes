<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreQuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        return [
            // 'body' => 'required',
            'image' =>  ['required', 'image'],
            'movie_id' => ['required', Rule::exists('movies', 'id')],
            'body.en' => [
                'required',
                // 'unique:quotes,body->en',
                'regex:/^[a-zA-Z\s]*$/',
            ],
            'body.ka' => [
                'required',
                // 'unique:quotes,body->ka',
                'regex:/^[\p{Georgian}\s]*$/u',
            ]
        ];
    }
}
