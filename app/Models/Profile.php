<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'middle_name',
        'last_name',
        'province',
        'city',
        'zipcode',
        'barangay',
        'gender',
        'user_id'
    ];
    // get full address
    public function getFullAddressAttribute()
    {
        return ($this->barangay?$this->barangay.', ':'').
                ($this->city?$this->city.', ':'').
                ($this->province?$this->province.', ':'').
                ($this->zipcode?$this->zipcode:'');
    }
    // get full name
    public function getFullName()
    {
        return ucwords(
            $this->first_name.' '.
            ($this->middle_name?ucfirst($this->middle_name)[0].'. ':'').
            $this->last_name
        );
    }
    
}
