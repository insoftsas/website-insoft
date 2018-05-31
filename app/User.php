<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    
    protected $appends = ['isSuperAdmin', 'isAdmin', 'isJury', 'isMixAdmin'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'avatar', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public static $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'avatar' => ''
    ]; 

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function isSuperAdmin()
    {
        return $this->hasRoles(['root']);
    }
    
    public function getIsSuperAdminAttribute()
    {
        return $this->isSuperAdmin();
    }

    public function isAdmin()
    {
        return $this->hasRoles(['admin']);
    }
    
    public function getIsAdminAttribute()
    {
        return $this->isSuperAdmin();
    }

    public function isMixAdmin()
    {
        return $this->hasRoles(['root', 'admin']);
    }

    public function getIsMixAdminAttribute()
    {
        return $this->isSuperAdmin();
    }

    public function isJury()
    {
        return $this->hasRoles(['jury']);
    }

    public function getIsJuryAttribute()
    {
        return $this->isSuperAdmin();
    }

    public function hasRoles(array $roles)
    {
        return $this->roles->pluck('name')->intersect($roles)->count();
    }


    public function getCreatedHumansAttribute()
    {
        return (new Date( $this->created_at))->diffForHumans();
    }

    public function setPasswordAttribute($password)
    {
       return $this->attributes['password'] = bcrypt($password);
    }
    

    /*
    *   Relationships
    */

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'assigned_roles')->withTimestamps();
    }

}
