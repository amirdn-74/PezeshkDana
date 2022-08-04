<?php

namespace App\Rules;

use App\Models\ScientificLevel;
use Illuminate\Contracts\Validation\Rule;

class ValidScientificLevel implements Rule
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
        if (is_numeric($value)) {
            return $level = ScientificLevel::where('id', $value)->first() ? true : false;
        } else return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'سطح علمی معتبر نیست';
    }
}
