<?php

namespace App\model\Auth;

use Illuminate\Database\Eloquent\Model;

class Authlogin extends Model
{
    protected $table = 'admin';
	
    protected $fillable = [
     	'role',
     	'email',
     	'phone',
        'username',
        'password',
        'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
