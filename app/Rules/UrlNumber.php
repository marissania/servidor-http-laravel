<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UrlNumber implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function messages(){
        return [
            'nomeurl' => 'O campo :attribute deve ser preenchido com valores numéricos.',
            'nomeurl.min' => 'O campo :attribute requer um mínimo de :min caracteres.',
            'nomeurl.max' => 'O campo :attribute não pode exceder :max caracteres.'
        ];
    }
}
