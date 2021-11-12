<?php

namespace App\Http\Requests\RomanNumeral;

use Illuminate\Foundation\Http\FormRequest;

class StoreRomanNumeralRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'number' => 'required|integer|min:1|max:3999'
        ];
    }
}
