<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            // 'title' => ['required', 'unique:movies,title']

            'title.en' => [
                'required',
                'unique:movies,title->en',
                'regex:/^[a-zA-Z\s]*$/',
            ],
            'title.ka' => [
                'required',
                'unique:movies,title->ka',
                'regex:/^[\p{Georgian}\s]*$/u',
            ]
        ];
    }
}
