<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'phone',
        'usertype',
        'password',
    ];

    public static function boot() {
        parent::boot();
        self::deleting(function($user) { // before delete() method call this
             $user->profile->delete(); // <-- direct deletion
            //  });
            //  $user->posts()->each(function($post) {
            //     $post->delete(); // <-- raise another deleting event on Post to delete comments
            //  });
             // do the rest of the cleanup...
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $with=['profile'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
    public function getFullName()
    {
        $profile=$this->profile;
        return ucwords(
            $profile->first_name.' '.
            ($profile->middle_name?ucfirst($profile->middle_name)[0].'. ':'').
            $profile->last_name
        );
    }
    public function donation()
    {
        return $this->morphOne(Donations::class, 'donator');
    }
    public static function countPending()
    {
        return User::where('usertype','user')->where('status','pending')->count();
    }
    public function displayName()
    {
        return $this->profile->first_name.' '.ucFirst($this->profile->last_name[0]).'.';
    }
    // check if is admin
    public function isAdmin()
    {
        return $this->usertype=='admin';
    }
}
