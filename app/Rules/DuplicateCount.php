<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Reservation;

class DuplicateCount implements Rule
{
    public $max;
    public $session_id;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($max,$session_id=1)
    {
        $this->max=$max;
        $this->session_id=$session_id;
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
            ->whereRaw("(status = 'pending' OR status = 'confirmed') and date_visit = CURDATE() and session_id = $this->session_id")
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
