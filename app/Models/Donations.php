<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'mode',
        'amount',
        'cover_fees',
        'gcash_number',
        'reference_number',
        'photo',
        'transaction_type'
    ];
    
    /**
     * Get the model that the donation belongs to.
     */
    public function donator()
    {
        return $this->morphTo(__FUNCTION__, 'transaction_type', 'user_id');
    }
    protected $with=['donator'];
    protected $casts=[
        'cover_fees'=>'boolean'
    ];
}
