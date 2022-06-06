<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table='reservation';
    
    protected $fillable=[
        'user_id',
        'date_visit',
        'session_id',
        // 'no_of_pax',
        'first_name',
        'last_name',
        'email',
        'phone',
        'event_id',
        'address',
        'status',
        // 'gcash_account_name',
        // 'gcash_number',
        // 'reference_number',
        // 'photo',
    ];
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function session()
    {
        return $this->belongsTo(Session::class);
    }
    
    public function getFullName()
    {
        return ucwords(
            $this->first_name.' '.
            $this->last_name
        );
    }
    public static function countPending()
    {
        return self::where('status','pending')->count();
    }
    public function pax()
    {
        return $this->hasMany(Pax::class);
    }
    public function payment()
    {
        return $this->hasOne(Payments::class,'transaction_id');
    }
    
}
