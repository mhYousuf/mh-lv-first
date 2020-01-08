<?php

namespace App\model\Auth;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Authlogin extends Authenticatable
{
    protected $table = 'admin';
    
    protected $fillable = [
<<<<<<< HEAD
        'role',
        'name',
        'email',
        'phone',
=======
     	'role',
        'name',
     	'email',
     	'phone',
>>>>>>> a9c5338c09b838c8c0caf6cb2924f8bf8f158ff4
        'username',
        'password',
        'status',
        'online'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
