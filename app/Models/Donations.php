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
        'transaction_type',
        'status'
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
    
    public static function countPending()
    {
        return self::with('donator')->where('status','pending')->count();
    }

    public static function getCounts($dates)
    {
        $donations=Donations::where('status','confirmed');
        if(!is_array($dates)){
            $donations=$donations->whereDate('created_at',$dates);
        }
        else{
            $donations=$donations->whereBetween('created_at',$dates);
        }
        $donations=$donations->selectRaw('count(*) as count, sum(amount) as total')->get()->toArray();
        return $donations;
    }
}
