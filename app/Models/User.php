<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Tweet;
use App\Traits\Followable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Followable;

    protected $fillable = ['name',
    'email',
    'password',
    'username',];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function tweet()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function timeline()
    {
        $followedUserIds = $this->following()->pluck('users.id');
        return Tweet::whereIn('user_id', $followedUserIds)
        ->orWhere('user_id', $this->id)
        ->latest()->get();
    }

    public function getAvatarAttribute($value)
{
    if ($value) {
        return asset('storage/' . $value); // Custom avatar exists, return its URL
    } else {
        // Generate avatar URL using "pravatar.cc" with user's email
        return "https://i.pravatar.cc/200?u=" . urlencode($this->email);
    }
}


    public function path($append=''){
        $path= route('profile',$this->username);

        return $append ? "{$path}/{$append}" : $path;
    }
}
