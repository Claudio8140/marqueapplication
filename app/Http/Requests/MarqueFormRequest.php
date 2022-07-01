<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarqueFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => [
                'required',
                'string',
                'max:20',
            ],
            'date' => [
                'required',
                'string',
                'date',
                'date_format:Y-m-d',
            ],
            'description' => [
                'required',
                'string',
                'max:191',
            ],
            'url' => [
                'required',
                'max:20',
            ],
            'telephone' => [
                'required',
                'string',
                // 'digit:10'
            ],
            'email' => [
                'required',
                'email',
                'unique:marques,email',
            ],
        ];

        return $rules;
    }
}
