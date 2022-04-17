<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
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
        'email',
        'phone'
    ];
    protected $table='guest';

    public function donation(){
        return $this->morphOne(Donations::class, 'donator');
    }
 
    public function getFullName()
    {
        return ucwords(
            $this->first_name.' '.
            ($this->middle_name?ucfirst($this->middle_name)[0].'. ':'').
            $this->last_name
        );
    }
    
}
