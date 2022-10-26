<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pax extends Model
{
    use HasFactory;
    protected $fillable=[
        'reservation_id',
        'name',
        'class',
        'birth_date',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
