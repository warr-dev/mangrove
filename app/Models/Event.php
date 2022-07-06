<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'date',
        'venue',
        'transtype',
        'price',
        'description',
    ];

    function getStatus()
    {
        if($this->date==now())
        {
            return 'ongoing';
        }
        else if($this->date<now()){
            return 'recent';
        }
        else{
            return 'upcoming';
        }
    }
    function getPrice()
    {
        return $this->price==0?'':' (Php '.$this->price.')';
    }
    protected $casts = [
        'date'  => 'date:Y-m-d',
    ];
}
