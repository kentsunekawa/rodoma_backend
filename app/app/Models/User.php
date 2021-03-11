<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Notifications\CustomPasswordReset;
use App\Notifications\VerifyEmail;

class User extends Authenticatable implements JWTSubject, MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function sendPasswordResetNotification($token) {
        $this->notify(new CustomPasswordReset($token));
    }

    public function sendEmailVerificationNotification() {
        $this->notify(new VerifyEmail);
    }

    public function profile() {
        return $this->hasOne('App\Models\Profile');
    }

    public function sns() {
        return $this->hasManyThrough('App\Models\Sns', 'App\Models\Profile');
    }

    public function followings() {
        return $this->belongsToMany('App\Models\User', 'relations', 'follower_id', 'followed_id');
    }

    public function followers() {
        return $this->belongsToMany('App\Models\User', 'relations', 'followed_id', 'follower_id');
    }

    public function getIconData() {
        return [
            'name' => $this->name,
            'icon_url' => $this->icon_url,
        ];
        // return $this->name;
    }
}
