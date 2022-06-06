<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable=[
        'transaction_id',
        'gcash_account_name',
        'gcash_number',
        'reference_number',
        'photo',
    ];
}
