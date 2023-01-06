<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class BirthRule implements Rule
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
        if ((integer) date("Y")-(integer) substr($value,0,4)< 18){
            return false;
        }
        elseif ((integer) date("Y")-(integer) substr($value,0,4)==18){
            if ((integer) date("m")-(integer) substr($value,-5,2)>=0 && (integer) date("d")-(integer) substr($value,-2)>=0){
                return true;
            }
        }
        else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Your age must be over 18';
    }
}
