<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;


      protected $appends = ['IsMixedAdmin'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'avatar', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function isSuperAdmin()
    {
        return $this->hasRoles(['root']);
    }

    public function isAdmin()
    {
        return $this->hasRoles(['admin']);
    }


    public function isMixAdmin()
    {
        return $this->hasRoles(['root', 'admin']);
    }

    public function isJury()
    {
        return $this->hasRoles(['jury']);
    }

    public function hasRoles(array $roles)
    {
        return $this->roles->pluck('name')->intersect($roles)->count();
    }


    public function getCreatedHumansAttribute()
    {
        return (new Date( $this->created_at))->diffForHumans();
    }
    public function getIsMixedAdminAttribute()
    {
        return $this->isMixAdmin()==1?true:false;
    }
    public function getIsPollsterAttribute()
    {
        if($this->isPollster()){
            return true;
        }
        return false;
    }

    /*
    *   Relationships
    */

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'assigned_roles')->withTimestamps();
    }

}
