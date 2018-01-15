<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Account extends General implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable,
        Authorizable,
        CanResetPassword;
    use Notifiable;

    protected $table = 'account';
    protected $primaryKey = 'uid';
    protected $fillable = ['uid', 'name', 'type', 'user', 'phone', 'cookie', 'info', 'pass', 'remember_token'];
    protected $hidden = [
        'pass', 'remember_token',
    ];
    public $timestamps = false;

    public function post()
    {
        return $this->hasMany('App\Model\Post');
    }

    public function comment()
    {
        return $this->hasMany('App\Model\Comment');
    }

    public function getAuthPassword()
    {
        return $this->pass;
    }
}
