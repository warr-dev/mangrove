<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Reservation;

class DuplicateCount implements Rule
{
    public $max;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($max)
    {
        $this->max = $max;
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
        $count=Reservation::where($attribute,$value)
            ->whereRaw("(status = 'pending' OR status = 'confirmed')")
            ->count();
        if($count>=$this->max)
        {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Maximum number of reservations for this date reached';
    }
}
