<?php

namespace App\Rules;

use App\Models\SalesGuy;
use Illuminate\Contracts\Validation\Rule;

class ValidatePCode implements Rule
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
    {   $salesGuys = SalesGuy::all()->toArray();
//        $oldPCodes = $salesGuys
//        foreach ($oldPCodes as $oldPCode){
//
//        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The postal code is conflicting with another persons job area.';
    }
}
