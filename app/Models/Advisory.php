<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'details',
        'image',
        'date',
        // 'user_id',
        // 'category_id',
        // 'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date',
    ];
}
